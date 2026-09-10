<?php 
if ( ! defined( 'ABSPATH' ) ) { exit;}
  if( !class_exists( 'ni_custom_order_status_email' ) ) {
	class ni_custom_order_status_email {
		public function __construct(){
			add_action('woocommerce_order_status_changed', array($this, 'ni_custom_order_status_woocommerce_order_status_changed'), 10, 4);
		}
		function ni_custom_order_status_woocommerce_order_status_changed($order_id,$old_status,$new_status){
			//error_log($order_id ." " .$old_status. " " .$new_status);
			
			
			$ni_order_status_email_enable = 'no';
			$ni_order_status_email_content = '';
			$ni_order_status_subject_line = '';
			$order_status = $this->get_post_status_id_by_name($new_status);
			
			if (isset($order_status->ID)){
				$ni_order_status_email_content = esc_html( get_post_meta( $order_status->ID, '_ni_order_status_email_content', true ) );
				$ni_order_status_email_enable = esc_html( get_post_meta( $order_status->ID, '_ni_order_status_email_enable', true ) );
				$ni_order_status_subject_line = esc_html( get_post_meta( $order_status->ID, '_ni_order_status_subject_line', true ) );
			}
			if ($ni_order_status_email_enable =='yes'){
				
				
				$message = $ni_order_status_email_content;
				$headers = '';
				
				$email_from_name = get_option("woocommerce_email_from_name");
				$email_from_address = get_option( "woocommerce_email_from_address" );
				
				$headers = 'From: '. $email_from_name .' <'. $email_from_address .'>'. "\r\n" ;
				
				$attachments = array();
				
				$order = wc_get_order( $order_id );
				
				$billing_email  = $order->get_billing_email();
				
				$ni_order_status_subject_line = apply_filters('ni_custom_order_status_email_subject',$ni_order_status_subject_line,$order_status,$order,$old_status,$new_status);
				
				$message = apply_filters('ni_custom_order_status_email_content',$message,$order_status,$order,$old_status,$new_status);
				
				$sent =  wp_mail($billing_email, $ni_order_status_subject_line, $message , $headers,  $attachments );
				/*
				if($sent){
					error_log("Email Sent " . $billing_email);
				}else{
					error_log("Email not Sent " . $billing_email);
				}
				*/
			}			
			
			
		}
		function get_post_status_id_by_name($post_status){
				global $wpdb;

				/*
				 * The custom order-status definitions live in the "ni-order-status" custom post type,
				 * which stays in wp_posts under both HPOS and legacy order storage, so this raw SQL
				 * remains storage-agnostic. It is parameterised through $wpdb->prepare() because
				 * $post_status originates from the WooCommerce status slug passed to the
				 * woocommerce_order_status_changed hook.
				 *
				 * The status key registered with WooCommerce is derived from the "_ni_order_status_slug"
				 * meta value, which is not guaranteed to equal the post's permalink slug (post_name).
				 * Match on the meta value first, falling back to post_name so existing installs where
				 * the two happen to be identical keep working.
				 */
				$query = $wpdb->prepare(
					"SELECT posts.ID
						FROM {$wpdb->prefix}posts as posts
						LEFT JOIN {$wpdb->prefix}postmeta as slug
							ON slug.post_id = posts.ID
							AND slug.meta_key = '_ni_order_status_slug'
						WHERE posts.post_type ='ni-order-status'
								AND posts.post_status ='publish'
								AND ( slug.meta_value = %s OR posts.post_name = %s )
						ORDER BY ( slug.meta_value = %s ) DESC
						LIMIT 1
						",
					$post_status,
					$post_status,
					$post_status
				);
					$row = $wpdb->get_row($query);
					
				//echo error_log(json_encode(print_r($results,true)));
				return $row ;
		}
		
	}
  }
?>