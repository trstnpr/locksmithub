<?php

	class App extends CI_Controller {

		public function __construct()
        {
            parent::__construct();
            
            $this->load->helper('yelp');
            $this->load->helper('general');
			$this->load->model('State_model');
			$this->load->model('City_model');
			$this->load->model('Business_model');
			$this->load->model('Page_model');
			$this->load->model('Configuration_model');
        }

		public function index($page = 'home') {

			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
				show_404();
			} else {

				$data['title'] = the_config('site_title');
				$data['term'] = 'locksmith';
				$data['location'] = '';

				$yelp = featured_locksmith($data['term'], 'California');
				$data['yelp_count'] = count($yelp);
				if($yelp != 0) {
					$data['yelp'] = $yelp;
				} else {
					$data['yelp'] = 0;
				}

				$business = $this->Business_model->get_verified_business();
				$data['business_count'] = count($business);
				if($business != 0) {
					$data['local_business'] = $business;
				} else {
					$data['local_business'] = 0;
				}

				// Blog Data
				$blogs = $this->Page_model->get_published_post();
				if($blogs != 0) {
					$data['blogs'] = $blogs;
				} else {
					$data['blogs'] = 0;
				}

				// META
				$data['meta_title'] = the_config('meta_title');
				$data['meta_keyword'] = the_config('meta_keyword');
				$data['meta_description'] = the_config('meta_description');

				$popular_cities = $this->City_model->get_popular_city();
				if($popular_cities != 0) {
					$data['popular_city'] = array('result' => 'success', 'message' => 'Has Popular City', 'data' => $popular_cities);
				} else {
					$data['popular_city'] = array('result' => 'error', 'message' => 'No Popular City');
				}
				
				$this->load->view('templates/header', $data);
				$this->load->view('pages/'.$page, $data);
				$this->load->view('templates/footer');
			}

		}

		public function states($page='states') {

			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
				show_404();
			} else {

				$data['title'] = 'Locksmiths by '.ucwords($page).' - '.the_config('site_name');

				$data['states'] = $this->State_model->get_states();
				$data['location'] = 'United States';

				$popular_cities = $this->City_model->get_popular_city();
				if($popular_cities != 0) {
					$data['popular_city'] = array('result' => 'success', 'message' => 'Has Popular City', 'data' => $popular_cities);
				} else {
					$data['popular_city'] = array('result' => 'error', 'message' => 'No Popular City');
				}

				// META
				$data['meta_title'] = '24 Hour Locksmith Directory | '.the_config('site_name');
				$data['meta_keyword'] = '24 Hour Emergency Locksmith, Residential Locksmith Service, Commercial Locksmith Service, Automotive Locksmith Service, Emergency Locksmith Service, Industrial Locksmith Service';
				$data['meta_description'] = 'We are a directory of 24 hour locksmith company servicing residential, commercial, automotive, industrial and emergency situation.';

				$this->load->view('templates/header', $data);
				$this->load->view('pages/'.$page, $data);
				$this->load->view('templates/footer');

			}
			
		}

		public function state($page = 'state') {

			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
				show_404();
			} else {

				$data['abbrev'] = $this->uri->segment(2, 0);

				$data['state_arr'] = $this->State_model->get_state_from_abbrev($data['abbrev']);

				if ($data['state_arr'] != 0) {

					$data['cities'] = $this->City_model->get_city_from_state(strtolower($data['abbrev']));

					$data_state = $data['state_arr'][0];

					$rand_int = array_rand(range(1,12), 1);
					$data['banner_img'] = 'build/images/random/'.$rand_int.'.jpg';
					$data['ads_img'] = 'build/images/thumb-ad/'.$rand_int.'.jpg';

					$data['title'] = 'Locksmiths in '.$data_state->state.' - '.the_config('site_name');

					$popular_cities = $this->City_model->get_popular_city();
					if($popular_cities != 0) {
						$data['popular_city'] = array('result' => 'success', 'message' => 'Has Popular City', 'data' => $popular_cities);
					} else {
						$data['popular_city'] = array('result' => 'error', 'message' => 'No Popular City');
					}

					// META
					$data['meta_title'] = 'Find a Locksmith in '.$data_state->state.' | '.the_config('site_name');
					$data['meta_keyword'] = '24 hour emergency locksmith in '.$data_state->state.', residential locksmith service in '.$data_state->state.', commercial locksmith service in '.$data_state->state.', automotive locksmith service in '.$data_state->state.', emergency locksmith service in '.$data_state->state.', industrial locksmith service in '.$data_state->state;
					$data['meta_description'] = 'Find a competent 24 hour mobile emergency locksmiths in '.$data_state->state.' today. Know Locksmith lists hundreds of reliable full service locksmith companies in town.';
					
					$this->load->view('templates/header', $data);
					$this->load->view('pages/'.$page, $data);
					$this->load->view('templates/footer');
				} else {

					header('Location: '.base_url('states'));

				}
			}
		}

		public function city($page = 'city') {

			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
				show_404();
			} else {
				
				$slug = $this->uri->segment(2, 0);

				$city_data = $this->City_model->get_city_from_slug($slug);

				if($city_data != 0) {

					$data['city_data'] = $city_data[0];

					$city = $data['city_data']->name;

					$state_abbrev = strtoupper($data['city_data']->state);

					$state = $this->State_model->get_state_from_abbrev($state_abbrev);

					$data['state'] = $state[0];

					$rand_int = array_rand(range(1,12), 1);
					$data['banner_img'] = 'build/images/random/'.$rand_int.'.jpg';
					$data['ads_img'] = 'build/images/thumb-ad/'.$rand_int.'.jpg';

					$data['term'] = 'locksmith';
					$data['location'] = $city.', '.$data['state']->abbrev;

					$data['yelp'] = search($data['term'], $data['location']);

					$popular_cities = $this->City_model->get_popular_city();
					if($popular_cities != 0) {
						$data['popular_city'] = array('result' => 'success', 'message' => 'Has Popular City', 'data' => $popular_cities);
					} else {
						$data['popular_city'] = array('result' => 'error', 'message' => 'No Popular City');
					}

					foreach($data['yelp'] as $res) {
						$i = 0;
						if($res->location->city == $city) {
							$i = $i + 1;
						}
						$exact[] = $i;
					}
					$yelp_count = (array_sum($exact) != 0) ? array_sum($exact).' Exact Results' : count($data['yelp']).' Suggestions';

					$ybiz = array();
					foreach($data['yelp'] as $ybiz) {
						$bizname[] = $ybiz->name;
					}
					$business = join(', ', $bizname);

					// META
					$data['title'] = 'Top Locksmith in '.$city.', '.$state_abbrev.' | '.$yelp_count.' | As of '.recent_my().' - '.the_config('site_name');
					$data['meta_title'] = $data['title'];
					$data['meta_keyword'] = '24 hour emergency locksmith in '.$city.', '.$state_abbrev.', residential locksmith service in '.$city.', '.$state_abbrev.', commercial locksmith service in '.$city.', '.$state_abbrev.', automotive locksmith service in '.$city.', '.$state_abbrev.', emergency locksmith service in '.$city.', '.$state_abbrev.', industrial locksmith service in '.$city.', '.$state_abbrev;
					$data['meta_description'] = 'List of Locksmith in '.$city.', '.$state_abbrev.' - '.$business;
					
					$this->load->view('templates/header', $data);
					$this->load->view('pages/'.$page, $data);
					$this->load->view('templates/footer');
				} else {

					show_404();

				}
			}			

		}

		public function zip($page = 'zip') {

			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
				show_404();
			} else {

				$rand_int = array_rand(range(1,12), 1);
				$data['banner_img'] = 'build/images/random/'.$rand_int.'.jpg';
				$data['ads_img'] = 'build/images/thumb-ad/'.$rand_int.'.jpg';

				$popular_cities = $this->City_model->get_popular_city();
				if($popular_cities != 0) {
					$data['popular_city'] = array('result' => 'success', 'message' => 'Has Popular City', 'data' => $popular_cities);
				} else {
					$data['popular_city'] = array('result' => 'error', 'message' => 'No Popular City');
				}

				$data['term'] = 'locksmith';

				$data['zip'] = $this->uri->segment(2, 0);

				if(is_numeric($data['zip'])) {

					if(strlen($data['zip']) == 5) {

						$city_data = $this->City_model->get_city_from_zip($data['zip']);

						if($city_data != 0) {

							$data['city_data'] = $city_data[0];
							$data['state'] = $this->State_model->get_state_from_abbrev($data['city_data']->state)[0];
							$data['location'] = $data['city_data']->name.', '.strtoupper($data['city_data']->state).' '.$data['zip'];

							$data['yelp'] = search($data['term'], $data['location']);

							foreach($data['yelp'] as $res) {
								$i = 0;
								if($res->location->city == $data['city_data']->name) {
									$i = $i + 1;
								}
								$exact[] = $i;
							}
							$yelp_count = (array_sum($exact) != 0) ? array_sum($exact).' Exact Results' : count($data['yelp']).' Suggestions';

							$ybiz = array();
							foreach($data['yelp'] as $ybiz) {
								$bizname[] = $ybiz->name;
							}
							$business = join(', ', $bizname);

							// META
							$data['title'] = 'Expert Locksmith in '.$data['city_data']->name.', '.strtoupper($data['city_data']->state).' '.$data['zip'].' | '.$yelp_count.' | As of '.recent_my().' - '.the_config('site_name');
							$data['meta_title'] = $data['title'];
							$data['meta_keyword'] = '24 hour emergency locksmith in '.$data['city_data']->name.', '.strtoupper($data['city_data']->state).', residential locksmith service in '.$data['city_data']->name.', '.strtoupper($data['city_data']->state).', commercial locksmith service in '.$data['city_data']->name.', '.strtoupper($data['city_data']->state).', automotive locksmith service in '.$data['city_data']->name.', '.strtoupper($data['city_data']->state).', emergency locksmith service in '.$data['city_data']->name.', '.strtoupper($data['city_data']->state).', industrial locksmith service in '.$data['city_data']->name.', '.strtoupper($data['city_data']->state);
							$data['meta_description'] = 'Leading Locksmith in '.$data['city_data']->name.', '.strtoupper($data['city_data']->state).' '.$data['zip'].' - '.$business;
							
							$this->load->view('templates/header', $data);
							$this->load->view('pages/'.$page, $data);
							$this->load->view('templates/footer');

						} else {
							show_404();
						}

					} else {
						header('Location:'.base_url('zip/'.format_zip($data['zip'])));
					}

				} else {
					show_404();
				}

			}			

		}

		public function contactProcess() {

			$mdata = $this->input->post();
			$gr_data = gr_keys();
			$site_key = $gr_data['site_key'];
			$secret_key = $gr_data['secret_key'];
			$site_verify = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$mdata['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR'];
			$response = file_get_contents($site_verify);
			$g_response = json_decode($response);

			if($g_response->success == 1) {

				$emailConfig = mail_config();

		        $from = array(
		            'email' => $mdata['email'],
		            'name' => strtoupper($mdata['name']).' - '.the_config('site_name').' Contact Us'
		        );
		       
		        // $to = array($mdata['email']);
		        $to = $emailConfig['smtp_user'];
		        $subject = $mdata['subject'];
		      	$message = $mdata['message'];
		        $this->load->library('email', $emailConfig);
		        $this->email->set_newline("\r\n");
		        $this->email->from($from['email'], $from['name']);
		        $this->email->to($to);
		        $this->email->subject($subject);
		        $this->email->message($message);
		        if (!$this->email->send()) {
		            $response = json_encode(array('result' => 'error', 'message' => 'Oops! Please try again later.'));
		        } else {
		            $response = json_encode(array('result' => 'success', 'message' => 'Message successfully sent!'));
		        }

			} else {
				$response = json_encode(array('result' => 'error', 'message' => 'Invalid Captcha!'));
			}

	        echo $response;

		}

		
	}

