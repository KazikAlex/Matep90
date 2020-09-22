<?php
	// добавление возможности использования метабоксов в КОНТАКТАХ
	/*
	* Этап 1. Добавление
	*/
	function contact_meta_boxes() {
		add_meta_box('contactMetabox','Контакты','contact_echo_box','contact','normal','high');
	}

	add_action( 'admin_menu', 'contact_meta_boxes' );
	/*
	* Этап 2. Заполнение
	*/
	function contact_echo_box($post) {
		wp_nonce_field( basename( __FILE__ ), 'seo_metabox_nonce' );
		$adress = get_post_meta($post->ID, 'adress', true);
		$phonemess = get_post_meta($post->ID, 'phonemess', true);
		$phonecity = get_post_meta($post->ID, 'phonecity', true);
		$phonemob = get_post_meta($post->ID, 'phonemob', true);
		$maildirector = get_post_meta($post->ID, 'maildirector', true);
		$mailmore = get_post_meta($post->ID, 'mailmore', true);
		$map = get_post_meta($post->ID, 'map', true);

		$seaTel1 = get_post_meta($post->ID, 'seaTel1', true);
		$seaTel2 = get_post_meta($post->ID, 'seaTel2', true);
		$seaTel3 = get_post_meta($post->ID, 'seaTel3', true);
		$seaMob1 = get_post_meta($post->ID, 'seaMob1', true);
		$seaMob2 = get_post_meta($post->ID, 'seaMob2', true);
		$seaMob3 = get_post_meta($post->ID, 'seaMob3', true);

		$aviaTel1 = get_post_meta($post->ID, 'aviaTel1', true);
		$aviaTel2 = get_post_meta($post->ID, 'aviaTel2', true);
		$aviaTel3 = get_post_meta($post->ID, 'aviaTel3', true);

		$euroTel1 = get_post_meta($post->ID, 'euroTel1', true);
		$euroTel2 = get_post_meta($post->ID, 'euroTel2', true);
		$euroTel3 = get_post_meta($post->ID, 'euroTel3', true);
		$euroMob1 = get_post_meta($post->ID, 'euroMob1', true);
		$euroMob2 = get_post_meta($post->ID, 'euroMob2', true);
		$euroMob3 = get_post_meta($post->ID, 'euroMob3', true);

		$guestVel = get_post_meta($post->ID, 'guestVel', true);
		$guestMTS = get_post_meta($post->ID, 'guestMTS', true);


?> 

		<label>Адрес<br/> <input style="width: 700px;" type="text" name="adress" value="<?php echo $adress ?>" /> </input></label><br>
		<label>Телефон (Viber, Telegram)<br/> <input type="text" name="phonemess" value="<?php echo $phonemess ?>" /> </label><br>
		<label>Телефон (городской)<br/> <input type="text" name="phonecity" value="<?php echo $phonecity ?>" /> </label><br>
		<label>Телефон (WatsApp, Telegram)<br/> <input type="text" name="phonemob" value="<?php echo $phonemob ?>" /> </label><br>
		<label>E-mail (директор)<br/> <input type="text" name="maildirector" value="<?php echo $maildirector ?>" /></label><br>
		<label>E-mail (общий)<br/> <input type="text" name="mailmore" value="<?php echo $mailmore ?>" /></label><br>
		<label>Карта главного офиса<br/> <input style="width: 1000px;"type="text" name="map" value="<?php echo $map ?>" /></label><br><br><br>
		
		<label>Морские круизы</label><br><br>

		<label>Телефон 1<br/> <input type="text" name="seaTel1" value="<?php echo $seaTel1 ?>" /> </label><br>
		<label>Телефон 2<br/> <input type="text" name="seaTel2" value="<?php echo $seaTel2 ?>" /> </label><br>
		<label>Телефон 3<br/> <input type="text" name="seaTel3" value="<?php echo $seaTel3 ?>" /> </label><br>
		<label>Телефон мобильный 1<br/> <input type="text" name="seaMob1" value="<?php echo $seaMob1 ?>" /> </label><br>
		<label>Телефон мобильный 2<br/> <input type="text" name="seaMob2" value="<?php echo $seaMob2 ?>" /> </label><br>
		<label>Телефон мобильный 3<br/> <input type="text" name="seaMob3" value="<?php echo $seaMob3 ?>" /> </label><br><br><br>

		<label>Авиатуры</label><br><br>

		<label>Телефон 1<br/> <input type="text" name="aviaTel1" value="<?php echo $aviaTel1 ?>" /> </label><br>
		<label>Телефон 2<br/> <input type="text" name="aviaTel2" value="<?php echo $aviaTel2 ?>" /> </label><br>
		<label>Телефон 3<br/> <input type="text" name="aviaTel3" value="<?php echo $aviaTel3 ?>" /> </label><br><br><br>

		<label>Автобусные туры в европу</label><br><br>

		<label>Телефон 1<br/> <input type="text" name="euroTel1" value="<?php echo $euroTel1 ?>" /> </label><br>
		<label>Телефон 2<br/> <input type="text" name="euroTel2" value="<?php echo $euroTel2 ?>" /> </label><br>
		<label>Телефон 3<br/> <input type="text" name="euroTel3" value="<?php echo $euroTel3 ?>" /> </label><br>
		<label>Телефон мобильный 1<br/> <input type="text" name="euroMob1" value="<?php echo $euroMob1 ?>" /> </label><br>
		<label>Телефон мобильный 2<br/> <input type="text" name="euroMob2" value="<?php echo $euroMob2 ?>" /> </label><br>
		<label>Телефон мобильный 3<br/> <input type="text" name="euroMob3" value="<?php echo $euroMob3 ?>" /> </label><br><br><br>

		<label>Прием иностранных гостей</label><br><br>

		<label>Телефон велком<br/> <input type="text" name="guestVel" value="<?php echo $guestVel ?>" /> </label><br>
		<label>Телефон МТС<br/> <input type="text" name="guestMTS" value="<?php echo $guestMTS ?>" /> </label><br>


<?php
	}
	/*
	* Этап 3. Сохранение
	*/
	function contact_save_box( $post_id ) {
		if ( !isset( $_POST['seo_metabox_nonce'] )
		|| !wp_verify_nonce( $_POST['seo_metabox_nonce'], basename( __FILE__ ) ) )
			return $post_id;
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
			return $post_id;
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
		$post = get_post($post_id);
		if ($post->post_type == 'contact') { // укажите собственный
			update_post_meta($post_id,'adress',esc_attr($_POST['adress']));   
			update_post_meta($post_id,'phonemess',esc_attr($_POST['phonemess']));
			update_post_meta($post_id,'phonecity',esc_attr($_POST['phonecity']));
			update_post_meta($post_id,'phonemob',esc_attr($_POST['phonemob']));    
			update_post_meta($post_id,'maildirector',esc_attr($_POST['maildirector']));
			update_post_meta($post_id,'mailmore',esc_attr($_POST['mailmore']));
			update_post_meta($post_id,'map',esc_attr($_POST['map']));

			update_post_meta($post_id,'seaTel1',esc_attr($_POST['seaTel1']));
			update_post_meta($post_id,'seaTel2',esc_attr($_POST['seaTel2']));
			update_post_meta($post_id,'seaTel3',esc_attr($_POST['seaTel3']));
			update_post_meta($post_id,'seaMob1',esc_attr($_POST['seaMob1']));
			update_post_meta($post_id,'seaMob2',esc_attr($_POST['seaMob2']));
			update_post_meta($post_id,'seaMob3',esc_attr($_POST['seaMob3']));

			update_post_meta($post_id,'aviaTel1',esc_attr($_POST['aviaTel1']));
			update_post_meta($post_id,'aviaTel2',esc_attr($_POST['aviaTel2']));
			update_post_meta($post_id,'aviaTel3',esc_attr($_POST['aviaTel3']));

			update_post_meta($post_id,'euroTel1',esc_attr($_POST['euroTel1']));
			update_post_meta($post_id,'euroTel2',esc_attr($_POST['euroTel2']));
			update_post_meta($post_id,'euroTel3',esc_attr($_POST['euroTel3']));
			update_post_meta($post_id,'euroMob1',esc_attr($_POST['euroMob1']));
			update_post_meta($post_id,'euroMob2',esc_attr($_POST['euroMob2']));
			update_post_meta($post_id,'euroMob3',esc_attr($_POST['euroMob3']));

			update_post_meta($post_id,'guestVel',esc_attr($_POST['guestVel']));
			update_post_meta($post_id,'guestMTS',esc_attr($_POST['guestMTS']));
			




















			// update_post_meta($post_id,'_seo_noindex', $_POST['noindex']);
		}
		return $post_id;
	}

	add_action('save_post','contact_save_box');



	// добавление возможности использования метабоксов в АКЦИЯХ
	/*
	* Этап 1. Добавление
	*/
	function stock_meta_boxes() {
		add_meta_box('stockMetabox','Акции','stock_echo_box','stock','normal','high');
	}

	add_action( 'admin_menu', 'stock_meta_boxes' );
	/*
	* Этап 2. Заполнение
	*/
	function stock_echo_box($post) {
		wp_nonce_field( basename( __FILE__ ), 'seo_metabox_nonce' );
		$stocks = get_post_meta($post->ID, 'stock', true);

?> 

	<label>Скидка<br/> <input type="text" name="stock" value="<?php echo $stocks ?>" /> </input></label><br>

<?php
	}
	/*
	* Этап 3. Сохранение
	*/
	function stock_save_box( $post_id ) {
		if ( !isset( $_POST['seo_metabox_nonce'] )
		|| !wp_verify_nonce( $_POST['seo_metabox_nonce'], basename( __FILE__ ) ) )
			return $post_id;
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
			return $post_id;
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
		$post = get_post($post_id);
		if ($post->post_type == 'stock') { // укажите собственный
			update_post_meta($post_id,'stock',esc_attr($_POST['stock']));   
			// update_post_meta($post_id,'_seo_noindex', $_POST['noindex']);
		}
		return $post_id;
	}

	add_action('save_post','stock_save_box');





	// добавление возможности использования метабоксов в ОТЗЫВАХ
	/*
	* Этап 1. Добавление
	*/
	function reviews_meta_boxes() {
		add_meta_box('reviewsMetabox','Акции','reviews_echo_box','reviews','normal','high');
	}

	add_action( 'admin_menu', 'reviews_meta_boxes' );
	/*
	* Этап 2. Заполнение
	*/
	function reviews_echo_box($post) {
		wp_nonce_field( basename( __FILE__ ), 'seo_metabox_nonce' );
		$cruise = get_post_meta($post->ID, 'cruise', true);

?> 

	<label>Название круиза<br/> <input style="width: 600px;" type="text" name="cruise" value="<?php echo $cruise ?>" /> </input></label><br>

<?php
	}
	/*
	* Этап 3. Сохранение
	*/
	function reviews_save_box( $post_id ) {
		if ( !isset( $_POST['seo_metabox_nonce'] )
		|| !wp_verify_nonce( $_POST['seo_metabox_nonce'], basename( __FILE__ ) ) )
			return $post_id;
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
			return $post_id;
		if ( !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
		$post = get_post($post_id);
		if ($post->post_type == 'reviews') { // укажите собственный
			update_post_meta($post_id,'cruise',esc_attr($_POST['cruise']));   
			// update_post_meta($post_id,'_seo_noindex', $_POST['noindex']);
		}
		return $post_id;
	}

	add_action('save_post','reviews_save_box');

?>