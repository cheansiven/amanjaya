<?php

class Booking extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->title = "Phnom Penh riverside suites hotel : Amanjaya"; //From Phnom Penh river view hotel: Amanjaya
        $this->meta_title = "Phnom Penh riverside suites hotel : Amanjaya"; //From Phnom Penh river view hotel: Amanjaya
        $this->meta_keywords = "suites, phnom penh, hotel, riverside";
        $this->meta_description = "Suites Hotel established on the riverside of Phnom Penh, facing the Mekong and the Tonle Sap. Superb and spacious suites with luxurious amenities and excellent customer satisfaction ";

    }

    public function book_a_table()
    {
        $input = $this->input;

        if (!$input && count($input) == 0) {
            return $this->jsonError('Error request.');
        }

        $name_of_reservation = $input->post('name_of_reservation');
        if($name_of_reservation == '') {
            return $this->jsonError('Name of reservation is empty');
        }

        $email = $input->post('email_address');
        if($email == '') {
            return $this->jsonError('Email is empty.');
        }

        if($input->post('date') == '') {
            return $this->jsonError('Date is empty.');
        }

        $date = date('Y-m-d', strtotime($input->post('date')));

        if($input->post('time') == '') {
            return $this->jsonError('Date is empty.');
        }

        $time = explode(' : ', $input->post('time'));
        $time = trim($time[0] . ':' . $time[1] . ' ' . $time[2]);
        $time = date('H:i:s', strtotime($time));

        if($input->post('number_of_guests') == false) {
            return $this->jsonError('Date is empty.');
        }

        $number_of_guests = $input->post('number_of_guests');
        $remarks = $input->post('remarks');

        if (empty($email)) {
            return $this->jsonError('Email is required.');
        } else {
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return $this->jsonError('Invalid email format.');
            }
        }

        $this->load->model('Booking_model');

        $inserted = $this->Booking_model->create([
            'name_of_reservation' => $name_of_reservation,
            'email' => $email,
            'date' => $date,
            'time' => $time,
            'number_of_guests' => $number_of_guests,
            'remarks' => $remarks
        ]);

        if ($inserted == false) {
            return $this->jsonError('Error booking request.');
        }

        $email_sent = $this->sendConfirmEmailToGuest($inserted);

        if (!$email_sent) {
            return $this->jsonError('Error sending email');
        }

        $email_sent = $this->sendConfirmEmailToHotel($inserted);

        if (!$email_sent) {
            return $this->jsonError('Error sending email');
        }

        return $this->json([
            'error' => false,
            'booking_id' => $inserted
        ]);
    }

    public function thank_you()
    {
        $this->load->view('amj/booking/thank_you');
    }

    public function json($data)
    {
        return
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
    }

    public function sendConfirmEmailToGuest($booking_id)
    {
        $booking = $this->Booking_model->find($booking_id);

        $body = $this->load->view('amj/booking/confirm', [
            'booking' => $booking
        ], true);

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://rsx.websitewelcome.com',
            'smtp_port' => 465,
            'smtp_user' => 'info@amanjaya-suites-phnom-penh.com',
            'smtp_pass' => 'amanjaya@123',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('reservation@amanjaya-pancam-hotel.com', 'Reservation');
        $this->email->to($booking->row('email'), ucwords($booking->row('name_of_reservation')));
        $this->email->bcc('franck@lox-design.com', 'Franck');
        $this->email->subject('Your reservation at Kwest');
        $this->email->message($body);

        return $this->email->send();
    }

    public function sendConfirmEmailToHotel($booking_id)
    {
        $booking = $this->Booking_model->find($booking_id);

        $body = $this->load->view('amj/booking/confirm_hotel', [
            'booking' => $booking
        ], true);

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://rsx.websitewelcome.com',
            'smtp_port' => 465,
            'smtp_user' => 'info@amanjaya-suites-phnom-penh.com',
            'smtp_pass' => 'amanjaya@123',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from($booking->row('email'), ucwords($booking->row('name_of_reservation')));
        $this->email->to("reservation@amanjaya-pancam-hotel.com", 'Kwest'); //hotel email
        $this->email->bcc('franck@lox-design.com', 'Franck');
        $this->email->subject('One new reservation for Kwest');
        $this->email->message($body);

        return $this->email->send();
    }

    private function jsonError($error_message)
    {
        return $this->json([
            'error' => [
                'status' => true,
                'message' => $error_message
            ]
        ]);
    }

}