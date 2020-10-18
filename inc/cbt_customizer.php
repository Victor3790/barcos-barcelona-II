<?php

  function cbt_customizer( $wp_customize ){
    //Register the settings in the database

    //Social
    $wp_customize->add_setting( 'cbt_facebook_handle', [
      'default'   => '',
      'transport' => 'refresh'
    ]);

    $wp_customize->add_setting( 'cbt_twitter_handle', [
      'default'   => '',
      'transport' => 'refresh'
    ]);

    $wp_customize->add_setting( 'cbt_instagram_handle', [
      'default'   => '',
      'transport' => 'refresh'
    ]);

    //Contact
    $wp_customize->add_setting( 'cbt_phone_handle', [
      'default'   => '',
      'transport' => 'refresh'
    ]);

    $wp_customize->add_setting( 'cbt_mail_handle', [
      'default'   => '',
      'transport' => 'refresh'
    ]);

    //Register the section
    $wp_customize->add_section( 'cbt_social_section', [
      'title'     =>  'Redes sociales',
      'priority'  =>  30
    ]);

    $wp_customize->add_section( 'cbt_contact_section', [
      'title'     =>  'Contacto',
      'priority'  =>  31
    ]);

    //Assign a control

    //Social
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'cbt_facebook_input',
        array(
            'label'          => 'Facebook',
            'section'        => 'cbt_social_section',
            'settings'       => 'cbt_facebook_handle',
            'type'           => 'text'
        )
      ));

      $wp_customize->add_control(new WP_Customize_Control(
          $wp_customize,
          'cbt_twitter_input',
          array(
              'label'          => 'Twitter',
              'section'        => 'cbt_social_section',
              'settings'       => 'cbt_twitter_handle',
              'type'           => 'text'
          )
        ));

      $wp_customize->add_control(new WP_Customize_Control(
          $wp_customize,
          'cbt_instagram_input',
          array(
              'label'          => 'Instagram',
              'section'        => 'cbt_social_section',
              'settings'       => 'cbt_instagram_handle',
              'type'           => 'text'
          )
      ));

      //Contact
      $wp_customize->add_control(new WP_Customize_Control(
          $wp_customize,
          'cbt_phone_input',
          array(
              'label'          => 'Teléfono',
              'section'        => 'cbt_contact_section',
              'settings'       => 'cbt_phone_handle',
              'type'           => 'text'
          )
      ));

      $wp_customize->add_control(new WP_Customize_Control(
          $wp_customize,
          'cbt_mail_input',
          array(
              'label'          => 'Mail',
              'section'        => 'cbt_contact_section',
              'settings'       => 'cbt_mail_handle',
              'type'           => 'text'
          )
      ));
  }