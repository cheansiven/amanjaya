<?php
class Amanjaya extends CI_Controller {
    function __construct()
    {
        parent::__construct();

        $this->title = "Phnom Penh riverside suites hotel : Amanjaya"; //From Phnom Penh river view hotel: Amanjaya
        $this->meta_title = "Phnom Penh riverside suites hotel : Amanjaya"; //From Phnom Penh river view hotel: Amanjaya
        $this->meta_keywords = "suites, phnom penh, hotel, riverside";
        $this->meta_description = "Suites Hotel established on the riverside of Phnom Penh, facing the Mekong and the Tonle Sap. Superb and spacious suites with luxurious amenities and excellent customer satisfaction ";

    }

    public function index()
    {
        $this->home();
    }
    public function home()
    {
        $data['page_name'] = "home";

        $this->load->view('amj/index', $data);
    }
	
	public function error404(){
		header("Location: /404");
	}
	
	public function errorMessage(){
		
		$data['page_name'] = '404';
		
		$this->meta_title = "Error 404 - Page not found";
		
		$this->load->view('amj/index', $data);
	}
	
	
    public function JuniorSuiteRoom()
    {
        $this->title = "Junior Suite in Phnom Penh";
        $this->meta_title = "Junior Suite in Phnom Penh";
        $this->meta_keywords = "river view hotel, riverside hotel";
        $this->meta_description = "Our Junior suite is an affordable luxury suite with a stunning view on the Mekong river. Ideal for couple or business travelers.";
$data['menu'] = 'panoramic-page';
        $data['page_name'] = "junior-suite";

        $this->load->view('amj/junior-suite-room', $data);
    }
    public function PanoramicSuiteRoom()
    {
        $this->title = "the largest room with great view";
        $this->meta_title = "the largest room with great view";
        $this->meta_keywords = "suites, phnom penh, hotel, riverside";
        $this->meta_description = "Looking for a wondeful suite in Phnom Penh with a view on the Mekong and the Tonle Sap. Excellent location, exquisite hotel on the riverfront with great standards.";
		$data['menu'] = 'panoramic-page';
        $data['page_name'] = "panoramic-suite";

        $this->load->view('amj/panoramic-suite-room', $data);
    }
    public function ExecutiveSuiteRoom()
    {
        $data['page_name'] = "executive-suite";
        $this->title = "Executive Suite with a view";
        $this->meta_title = "Executive Suite with a view";
        $this->meta_keywords = "suites, phnom penh, hotel, riverside";
        $this->meta_description = "The executive suite bears all the charms of Cambodia in harmony with all the modern amenities. A great value for your dollars.";

        $data['page_name'] = "executive-suite";

        $this->load->view('amj/executive-suite-room', $data);
    }
    public function BusinessTraveler()
    {
        $this->title = "Amanjaya means business for travelers";
        $this->meta_title = "Amanjaya means business for travelers";
        $this->meta_keywords = "suites, phnom penh, hotel, riverside";
        $this->meta_description = "When traveling to Phnom Penh on business, be sure to explore the numereous advantages of the Amanjaya Suites Hotel, with special amenities for the frequent travelers.";

        $data['page_name'] = "business";

        $this->load->view('amj/business-traveler', $data);
    }
    public function HoneyMoon()
    {
        $data['page_name'] = "honeyMoon";
        $this->title = "Honeymooners and newly weds best venue";
        $this->meta_title = "Honeymooners and newly weds best venue";
        $this->meta_keywords = "suites, phnom penh, hotel, riverside";
        $this->meta_description = "When searching for a great offer on Honeymoon packages, check the Amanjaya special offer. With very romantic suites with a view, our hotel has undeniable strong points.";

        $this->load->view('amj/honey-moon', $data);
    }
    public function DrinkAndDinning()
    {
        $data['page_name'] = "drinkDinner";
        $this->title = "Restaurant and lounge on the sisowath quay, kwest";
        $this->meta_title = "Restaurant and lounge on the sisowath quay, kwest";
        $this->meta_keywords = "suites, phnom penh, hotel, riverside";
        $this->meta_description = "Kwest is a sophisticated restaurant venue on the riverside of Phnom Penh. Serving hotel guests, but also local residents, as it is a convenient meeting point with ample parking space and excellent service.";

        $this->load->view('amj/key-west-restaurant', $data);
    }
    public function LeMoonBar()
    {
        $data['page_name'] = "leMoonBar";
        $this->title = "Riverview rooftop bar, Le Moon, at Amanjaya Hotel";
        $this->meta_title = "Rooftop bar and lounge on the riverside, Phnom Penh";
        $this->meta_keywords = "rooftop bar, bar and lounge, phnom penh, cocktails";
        $this->meta_description = "One of the most tempting and romantic bar in the capital, overlooking the evening riverside crowd and city life";

        $this->load->view('amj/le-moon-bar', $data);
    }
    public function galleryPage()
    {
        $data['page_name'] = "gallery-albums";

        $this->title = "Phnom Penh river view gallery: Suites";
        $this->meta_title = "Phnom Penh river view gallery: Suites";
        $this->meta_keywords = "suites, phnom penh, hotel, riverside";
        $this->meta_description = "Suites Hotel sitting on the quay, facing the Mekong river of Phnom Penh. Great and spacious suites with luxurious amenities and excellent customer satisfaction ";

        $this->load->view('amj/gallery/gallery', $data);
    }

    public function CustomizeYourStay()
    {
        $data['page_name'] = "customize-your-stay";

        $this->load->view('amj/customize-your-stay', $data);
    }

    public function galleryHoneyMoon()
    {
        $data['page_name'] = "gallery-honeymoon";

        /*$this->title = "Executive Suite with a view";
        $this->meta_title = "Executive Suite with a view";
        $this->meta_keywords = "suites, phnom penh, hotel, riverside";
        $this->meta_description = "Suites Hotel sitting on the quay, facing the Mekong river of Phnom Penh. Great and spacious suites with luxurious amenities and excellent customer satisfaction ";*/

        $this->load->view('amj/gallery/honeymoon', $data);
    }
    public function galleryDrinkingDinning()
    {
        $data['page_name'] = "gallery-drinking-dinning";

        $this->title = "Phnom Penh river view gallery: Restaurant";
        $this->meta_title = "Phnom Penh river view gallery: Restaurant";
        $this->meta_keywords = "suites, phnom penh, hotel, riverside";
        $this->meta_description = "Suites Hotel sitting on the quay, facing the Mekong river of Phnom Penh. Great and spacious suites with luxurious amenities and excellent customer satisfaction ";

        $this->load->view('amj/gallery/drinking-dinning', $data);
    }
    public function galleryOther()
    {
        $data['page_name'] = "hotel";

       $this->title = "Phnom Penh river view gallery: Various";
        $this->meta_title = "Phnom Penh river view gallery: Various";
        $this->meta_keywords = "suites, phnom penh, hotel, riverside";
        $this->meta_description = "Suites Hotel sitting on the quay, facing the Mekong river of Phnom Penh. Great and spacious suites with luxurious amenities and excellent customer satisfaction ";

        $this->load->view('amj/gallery/other', $data);
    }
    public function galleryMobileJunior()
    {
        $data['page_name'] = "gallery-junior";
        $this->load->view('amj/gallery-room-mobile/junior-suite-room', $data);
    }
    public function galleryMobilePanoramic()
    {
        $data['page_name'] = "gallery-panoramic";
        $this->load->view('amj/gallery-room-mobile/panoramic-suite-room', $data);
    }
    public function galleryMobileExecutive()
    {
        $data['page_name'] = "gallery-executive";
        $this->load->view('amj/gallery-room-mobile/executive-suite-room', $data);
    }
    public function Contact()
    {
        $this->load->library('session');
        $data['page_name'] = "contact";

        $this->title = "Executive Suite with a view";
        $this->meta_title = "Suites Hotel on the river of Phnom Penh: Amanjaya";
        $this->meta_keywords = "amanjaya, hotel, rooftop, phnom penh";
        $this->meta_description = "Contact us today through our hotline or book directly and save. Amanjaya is located on the riverside and features a rooftop bar";

        $this->load->view('amj/contact', $data);
    }
    
    public function doContactForm()
    {
        $fullname = ucfirst($this->input->post('name'));
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');


        $messages = '
            <html>
            <head>
            <title>Amanjaya E-mail</title>
            </head>
            <body>
                <p>Hello admin<br />
                A new client has contact to Amanjaya Website with following details:<br /><br />
                Contact date: '.date("M d, Y").'<br />
                Full name: '.$fullname.'<br />
                Email: '.$email.'<br />
                Phone: '.$phone.'<br />
                </p>
            </body>
            </html>
        ';
        $this->load->library('email');

        $this->email->set_mailtype("html");
        $this->email->from($email, $fullname);
        $this->email->to('reservation@amanjaya-pancam-hotel.com');
        $this->email->bcc('info@lox-design.com');

        $this->email->subject('New contact from Amanjaya Website');
        $this->email->message($messages);

        $this->email->send();

        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode('<p style="font-size: 14px; padding-top:10px;">We have well received your request. We will be in touch with you very shortly.<br> In the meantime, we invite you to visit our <a href="https://www.facebook.com/AmanjayaPancamHotelPhnomPenh" target="_blank">Facebook page</a>.</p>'));
    }

    public function mailSignUp()
    {
        $this->load->library('session');
		$gender = $this->input->post('gender');
        $fullname = ucfirst($this->input->post('lname')). ' '. ucfirst($this->input->post('fname'));
        $email = $this->input->post('email');
        $company = $this->input->post('company');

        $messages = '
            <html>
            <head>
            <title>Amanjaya E-mail</title>
            </head>
            <body>
                <p>Hello Admin<br />
                A new client has signup to Amanjaya Website with following details:<br /><br />
                Signup date: '.date("M d, Y").'<br />
                Full name: '.$gender.'. '.$fullname.'<br />
                Email: '.$email.'<br />
                Phone: '.$company.'<br />
                
                </p>
            </body>
            </html>
        ';

        $this->load->library('email');

        $this->email->set_mailtype("html");
        $this->email->from($email, "AMANJAYA SUITES HOTEL");
      $this->email->to('reservation@amanjaya-pancam-hotel.com');
       // $this->email->to('sothy@lox-design.com');
		$this->email->bcc('sothy@lox-design.com, info@lox-design.com');

        $this->email->subject('New signup from Amanjaya site');
        $this->email->message($messages);

        if($this->email->send())
        {

            $subject_user = "Warmest greeting from AMANJAYA SUITES HOTEL";
            $user_info = '
                <html>
               
                <body style="width: 100%; max-width: 500px; min-height: 100%;margin: 0 auto; font-family: arial;">

                <div style="background-color: #A61E22; text-align:center; width:100%; padding:13px 0;">
				
                    <img src="http://www.amanjaya-suites-phnom-penh.com/public/images/logoMailToClient.png" width="301px">
					
                </div>
				<div style="color: #58595B;  padding: 20px 0 20px 5px; font-size:14px; line-height:20px;">
                Dear '.$gender.'. ' .$fullname.',<br>
                We have well received your request. We will be in touch with you very shortly.<br>
                In the meantime, we invite you to visit our <a href="https://www.facebook.com/AmanjayaPancamHotelPhnomPenh" style="color: #A61E22">Facebook page</a>.
</div>
                <hr style="margin-top: 50px; margin-bottom: 10px; padding: 0 0 0 5px;">
			
                <p style="color: #A61E22; font-size: 14px; font-weight: bold; padding: 0 0 0 5px;">AMANJAYA PANCAM SUITES HOTEL</p>
				<div style="font-size:12px; color: #58595B; padding: 0 0 0 5px;">
                # 1 Dekcho Damdin (street 154)<br>
                Phnom Penh
                <br>Kingdom of Cambodia
				<br>+855 23 214 747
				<br><br>
				</div>
                </body>
                </html>
            ';


            // For User
            $this->email->message($user_info);

            $this->email->from('reservation@amanjaya-pancam-hotel.com', 'AMANJAYA SUITES HOTEL');
            $this->email->reply_to('reservation@amanjaya-pancam-hotel.com', 'AMANJAYA SUITES HOTEL');
            $this->email->to($this->input->post('email'));
            $this->email->bcc('sothy@lox-design.com, info@lox-design.com');
            $this->email->subject($subject_user);

            $this->email->send();
        }

        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode('<p style="font-size: 14px; padding-top: 50px;">We have well received your request. We will be in touch with you very shortly.<br> In the meantime, we invite you to visit our <a href="https://www.facebook.com/AmanjayaPancamHotelPhnomPenh" target="_blank">Facebook page</a>.</p>'));
    }
	
	public function honeyPackageSignUp()
    {
        $this->load->library('session');
        $email = $this->input->post('email');

        $messages = '
            <html>
            <head>
            <title>Amanjaya E-mail</title>
            </head>
            <body>
                <p>Dear Admin,<br />
                The following visitor enquires about our Honeymoon special:<br /><br />
               <a href="mailto:'.$email.'" style="color:#a51e22">'.$email.'</a><br />
                </p>
				<hr style="margin-top: 50px; margin-bottom: 10px;">
				  <p style="color: #A61E22; font-size: 14px; font-weight: bold;">AMANJAYA PANCAM SUITES HOTEL</p>
				<div style="font-size:12px; color: #58595B;">
                # 1 Dekcho Damdin (street 154)<br>
                Phnom Penh
                <br>Kingdom of Cambodia
				<br>+855 23 214 747
				<br><br>
				</div>
            </body>
            </html>
        ';

        $this->load->library('email');

        $this->email->set_mailtype("html");
        $this->email->from($email, "AMANJAYA SUITES HOTEL");
      $this->email->to('reservation@amanjaya-pancam-hotel.com');
        //$this->email->to('sothy@lox-design.com');
		$this->email->bcc('sothy@lox-design.com, info@lox-design.com');

        $this->email->subject('AMANJAYA SUITES HOTEL: Honeymoon request');
        $this->email->message($messages);

       $this->email->send();

        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode('Thank you for your request, our team will be in touch with you today. In the meantime, we invite you to visit our <a href="https://www.facebook.com/AmanjayaPancamHotelPhnomPenh" target="_blank">Facebook page</a>.'));
    }

}