<?php 

//Custom Heading
if(function_exists('vc_map')){

   vc_map( array(

   "name"      => __("OT Heading", 'insurance'),

   "base"      => "heading",

   "class"     => "",

   "icon" => "icon-st",

   "category"  => 'Content',

   "params"    => array(

      array(

         "type"      => "textarea",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Title", 'insurance'),

         "param_name"=> "text",

         "value"     => "",

         "description" => __("Enter the title", 'insurance')

      ),
      array(

        "type" => "dropdown",

        "heading" => __('Element Tag', 'insurance'),

        "param_name" => "tag",

        "value" => array(   					
                     __('h1', 'insurance') => 'h1',

                     __('h2', 'insurance') => 'h2',

                     __('h3', 'insurance') => 'h3',  

                     __('h4', 'insurance') => 'h4',

                     __('h5', 'insurance') => 'h5',

                     __('h6', 'insurance') => 'h6',  

                     __('p', 'insurance')  => 'p',

                     __('div', 'insurance') => 'div',
                    ),

        "description" => __("Section Element Tag", 'insurance'),      

      ),
      array(

        "type" => "dropdown",

        "heading" => __('Text Align', 'insurance'),

        "param_name" => "align",

        "value" => array(   					
                     __('left', 'insurance') => 'left',

                     __('right', 'insurance') => 'right',  

                     __('center', 'insurance') => 'center',

                     __('justify', 'insurance') => 'justify',
                     
                    ),

        "description" => __("Select text align", 'insurance'),      

      ),
      array(

         "type"      => "textfield",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Font Size", 'insurance'),

         "param_name"=> "size",

         "value"     => "",

         "description" => __("Enter the font size", 'insurance')

      ),
      array(

         "type"      => "colorpicker",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Color", 'insurance'),

         "param_name"=> "color",

         "value"     => "",

         "description" => __("Select color", 'insurance')

      ),
      array(

         "type"      => "textfield",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Class Extra", 'insurance'),

         "param_name"=> "class",

         "value"     => "",

         "description" => __("Add class extra", 'insurance')

      ),

    )));

}



//slider

if(function_exists('vc_map')){

  vc_map( array(

   "name"      => __("OT slider Home", 'insurance'),

   "base"      => "slider",

   "class"     => "",

   "icon" => "icon-st",

   "category"  => 'Content',

   "params"    => array(

    array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Number", 'insurance'),

         "param_name" => "number",

         "value" => "",

         "description" => __("Enter the number show", 'insurance')

      ),
    

    )));

}

//Agent

if(function_exists('vc_map')){

  vc_map( array(

   "name"      => __("OT Our Agent", 'insurance'),

   "base"      => "agent",

   "class"     => "",

   "icon" => "icon-st",

   "category"  => 'Content',

   "params"    => array(

    array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Number", 'insurance'),

         "param_name" => "number",

         "value" => "",

         "description" => __("Number show", 'insurance')

      ),
    

    )));

}

//claim

if(function_exists('vc_map')){

  vc_map( array(

   "name"      => __("OT Claim", 'insurance'),

   "base"      => "claim",

   "class"     => "",

   "icon" => "icon-st",

   "category"  => 'Content',

   "params"    => array(

    array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Number", 'insurance'),

         "param_name" => "number",

         "value" => "",

         "description" => __("Number show: show all = -1. Only use with style 2", 'insurance')

      ),
    array(

        "type" => "dropdown",

        "heading" => __('Style claim', 'insurance'),

        "param_name" => "style",

        "value" => array(   
                     __('Style1: icon and image ', 'insurance')    => 'style1',  

                     __('Style2: button', 'insurance')    => 'style2',

                    
                    ),

        "description" => __("Select style", 'insurance'),      

      )

    )));

}

//career
if(function_exists('vc_map')){

  vc_map( array(

   "name"      => __("OT Career", 'insurance'),

   "base"      => "career",

   "class"     => "",

   "icon" => "icon-st",

   "category"  => 'Content',

   "params"    => array(

    array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Number", 'insurance'),

         "param_name" => "number",

         "value" => "",

         "description" => __("Number show", 'insurance')

      ),
    array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Category Name", 'insurance'),

         "param_name" => "catename",

         "value" => "",

         "description" => __("Category Name", 'insurance')

      ),
    array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("idcate", 'insurance'),

         "param_name" => "idcate",

         "value" => "",

         "description" => __("Enter idcate", 'insurance')

      ),
    array(

        "type" => "dropdown",

        "heading" => __('Style claim', 'insurance'),

        "param_name" => "style",

        "value" => array(   
                     __('Style1: not button ', 'insurance')    => 'style1',  

                     __('Style2: button', 'insurance')    => 'style2',

                    
                    ),

        "description" => __("Select style", 'insurance'),      

      )

    )));

}

//Insurance Project

if(function_exists('vc_map')){

  vc_map( array(

   "name"      => __("OT Insurance Project", 'insurance'),

   "base"      => "propj",

   "class"     => "",

   "icon" => "icon-st",

   "category"  => 'Content',

   "params"    => array(

    array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Number", 'insurance'),

         "param_name" => "number",

         "value" => "",

         "description" => __("Number show", 'insurance')

      ),
     array(

        "type" => "dropdown",

        "heading" => __('Style Testimonials', 'insurance'),

        "param_name" => "style",

        "value" => array(   	
                     __('Style1: slider insurance ', 'insurance')    => 'style1',  

                     __('Style2: image insurance', 'insurance')    => 'style2',

                     __('Style3: insurance', 'insurance')    => 'style3',
					__('Style4: insurance', 'insurance')    => 'style4',
                    ),

        "description" => __("Select style", 'insurance'),      

      )

    )));

}

// Detail Block

if(function_exists('vc_map')){  

   vc_map( array(

   "name" => __("OT Detail Block", 'insurance'),

   "base" => "deblock",

   "class" => "",

   "category" => 'Content',

   "icon" => "icon-st",

   "params" => array(
 
      array(

         "type" => "textarea_html",

         "holder" => "div",

         "class" => "",

         "heading" => __("Description", 'insurance'),

         "param_name" => "content",

         "value" => '',

         "description" => __("Description details", 'insurance')

      ), 
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Icon Social 1", 'insurance'),

         "param_name" => "icon1",

         "value" => "",

         "description" => __("Input class icon 1. Ex: magic. Find here: <a href='http://fontawesome.io/icons/'>http://fontawesome.io/icons/</a>", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Link Social 1", 'insurance'),

         "param_name" => "soc1",

         "value" => "",

         "description" => __("Link of social 1", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Icon Social 2", 'insurance'),

         "param_name" => "icon2",

         "value" => "",

         "description" => __("Input class icon 2. Ex: magic. Find here: <a href='http://fontawesome.io/icons/'>http://fontawesome.io/icons/</a>", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Link Social 2", 'insurance'),

         "param_name" => "soc2",

         "value" => "",

         "description" => __("Link of social 2", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Icon Social 3", 'insurance'),

         "param_name" => "icon3",

         "value" => "",

         "description" => __("Input class icon 3. Ex: magic. Find here: <a href='http://fontawesome.io/icons/'>http://fontawesome.io/icons/</a>", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Link Social 3", 'insurance'),

         "param_name" => "soc3",

         "value" => "",

         "description" => __("Link of social 3", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Icon Social 4", 'insurance'),

         "param_name" => "icon4",

         "value" => "",

         "description" => __("Input class icon 4. Ex: magic. Find here: <a href='http://fontawesome.io/icons/'>http://fontawesome.io/icons/</a>", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Link Social 4", 'insurance'),

         "param_name" => "soc4",

         "value" => "",

         "description" => __("Link of social 4", 'insurance')

      ),
    )
    ));

}

// Block Quote 1

if(function_exists('vc_map')){  

   vc_map( array(

   "name" => __("OT Block Quote 1", 'insurance'),

   "base" => "bquote1",

   "class" => "",

   "category" => 'Content',

   "icon" => "icon-st",

   "params" => array(
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Title", 'insurance'),

         "param_name" => "title",

         "value" => "",

         "description" => __("Enter the title", 'insurance')
      ),      
      array(

         "type" => "textarea_html",

         "holder" => "div",

         "class" => "",

         "heading" => __("Description", 'insurance'),

         "param_name" => "content",

         "value" => 'des',

         "description" => __("Enter the description", 'insurance')

      ), 
    )
    ));

}

// Block Quote 2
if(function_exists('vc_map')){  

   vc_map( array(

   "name" => __("OT Block Quote 2", 'insurance'),

   "base" => "bquote2",

   "class" => "",

   "category" => 'Content',

   "icon" => "icon-st",

   "params" => array(
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Title", 'insurance'),

         "param_name" => "title",

         "value" => "",

         "description" => __("Enter the title", 'insurance')

      ),
      

      array(

         "type" => "textarea_html",

         "holder" => "div",

         "class" => "",

         "heading" => __("Description", 'insurance'),

         "param_name" => "content",

         "value" => '',

         "description" => __("Enter the description", 'insurance')

      ), 
    )
    ));

}


//Icon Boxes

if(function_exists('vc_map')){

   vc_map( array(

   "name"      => __("OT Icon Boxes", 'insurance'),

   "base"      => "ibb",

   "class"     => "",

   "icon" => "icon-st",

   "category"  => 'Content',

   "params"    => array(

      array(

         "type"      => "textfield",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Icon Box", 'insurance'),

         "param_name"=> "icon",

         "value"     => "",

         "description" => __("Input class icon. Ex: magic. Find here: <a href='http://fontawesome.io/icons/'>http://fontawesome.io/icons/</a>", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Title Box", 'insurance'),

         "param_name" => "title",

         "value" => "",

         "description" => __("Enter the title", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Subtitle Box", 'insurance'),

         "param_name" => "stitle",

         "value" => "",

         "description" => __("Enter the subtitle", 'insurance')

      ),
      array(

         "type" => "textarea_html",

         "holder" => "div",

         "class" => "",

         "heading" => __("Description", 'insurance'),

         "param_name" => "content",

         "value" => "",

         "description" => __("Enter the description", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Label Button", 'insurance'),

         "param_name" => "btn",

         "value" => "",

         "description" => __("Add text of button", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Link Button", 'insurance'),

         "param_name" => "link",

         "value" => "",

         "description" => __("Add link button", 'insurance')

      ),
      
      array(

        "type" => "dropdown",

        "heading" => __('Style Show', 'insurance'),

        "param_name" => "style",

        "value" => array(   
					__('None', 'insurance') => '',
                     __('Style 1: Box not icon', 'insurance') => 'style1',

                     __('Style 2: Box right', 'insurance') => 'style2', 

                     __('Style 3: Box center', 'insurance') => 'style3',

                     __('Style 4: Box left', 'insurance') => 'style4', 

                     __('Style 5: icon center grey', 'insurance') => 'style5', 

                    ),

        "description" => __("Select style", 'insurance'),      

      )

    )));

}

//step Boxes
if(function_exists('vc_map')){

   vc_map( array(

   "name"      => __("OT Step Boxes", 'insurance'),

   "base"      => "stb",

   "class"     => "",

   "icon" => "icon-st",

   "category"  => 'Content',

   "params"    => array(

    array(

         "type"      => "textfield",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Number", 'insurance'),

         "param_name"=> "number",

         "value"     => "",

         "description" => __(" Number of step box ", 'insurance')

      ),

      array(

         "type"      => "textfield",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Icon Box", 'insurance'),

         "param_name"=> "icon",

         "value"     => "",

         "description" => __("Input class icon. Ex: magic. Find here: <a href='http://fontawesome.io/icons/'>http://fontawesome.io/icons/</a>", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Title Box", 'insurance'),

         "param_name" => "title",

         "value" => "",

         "description" => __("Enter the title", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Subtitle Box", 'insurance'),

         "param_name" => "stitle",

         "value" => "",

         "description" => __("Enter the subtitle", 'insurance')

      ),
      array(

         "type" => "textarea_html",

         "holder" => "div",

         "class" => "",

         "heading" => __("Description", 'insurance'),

         "param_name" => "content",

         "value" => "",

         "description" => __("Enter the description", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Label Button", 'insurance'),

         "param_name" => "btn",

         "value" => "",

         "description" => __("Add text for button", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Link Button", 'insurance'),

         "param_name" => "link",

         "value" => "",

         "description" => __("Add link button", 'insurance')

      ),
      
      array(

        "type" => "dropdown",

        "heading" => __('Style Show', 'insurance'),

        "param_name" => "style",

        "value" => array(   					
                     __('Style 1: not icon', 'insurance') => 'style1',

                     __('Style 2: Box right', 'insurance') => 'style2', 

                     __('Style 3: Box center', 'insurance') => 'style3',

                     __('Style 4: Box left', 'insurance') => 'style4', 

                     __('Style 5: hover', 'insurance') => 'style5', 

                    ),

        "description" => __("Select style", 'insurance'),      

      )

    )));

}

//Feature Boxes
if(function_exists('vc_map')){

   vc_map( array(

   "name"      => __("OT Feature Boxes", 'insurance'),

   "base"      => "featureb",

   "class"     => "",

   "icon" => "icon-st",

   "category"  => 'Content',

   "params"    => array(

      array(

         "type"      => "textfield",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Icon Box", 'insurance'),

         "param_name"=> "icon",

         "value"     => "",

         "description" => __("Input class icon. Ex: magic. Find here: <a href='http://fontawesome.io/icons/'>http://fontawesome.io/icons/</a>", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Title Box", 'insurance'),

         "param_name" => "title",

         "value" => "",

         "description" => __("Enter the title", 'insurance')

      ),
      array(

         "type" => "textarea_html",

         "holder" => "div",

         "class" => "",

         "heading" => __("Description", 'insurance'),

         "param_name" => "content",

         "value" => "",

         "description" => __("Enter the description", 'insurance')

      ),
      array(

        "type" => "dropdown",

        "heading" => __('Style Show', 'insurance'),

        "param_name" => "style",

        "value" => array(   					
                     __('Style 1: Box not icon', 'insurance') => 'style1',

                     __('Style 2: Box right', 'insurance') => 'style2', 

                     __('Style 3: box left icon', 'insurance') => 'style3',

                     __('Style 4: Border icon radius', 'insurance') => 'style4', 

                     __('Style 5: icon center grey', 'insurance') => 'style5', 

                    ),

        "description" => __("Select style", 'insurance'),      

      )

    )));

}

// Call To Action 1

if(function_exists('vc_map')){


   vc_map( array(

   "name" => __("OT Call To Action 1", 'insurance'),

   "base" => "cta1",

   "class" => "",

   "category" => 'Content',

   "icon" => "icon-st",

   "params" => array(
      array(

         "type"      => "textfield",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Icon Box", 'insurance'),

         "param_name"=> "icon",

         "value"     => "",

         "description" => __("Input class icon. Ex: magic. Find here: <a href='http://fontawesome.io/icons/'>http://fontawesome.io/icons/</a>", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Title", 'insurance'),

         "param_name" => "title",

         "value" => "",

         "description" => __("Title call to action", 'insurance')

      ),
      array(

         "type" => "textarea_html",

         "holder" => "div",

         "class" => "",

         "heading" => __("Details", 'insurance'),

         "param_name" => "content",

         "value" => '',

         "description" => __("Details call to action", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Button Text", 'insurance'),

         "param_name" => "btntext1",

         "value" => "",

         "description" => __("Add text for button", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Button Link", 'insurance'),

         "param_name" => "btnlink1",

         "value" => '#',

         "description" => __("Add link button", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Button Text 2", 'insurance'),

         "param_name" => "btntext2",

         "value" => "",

         "description" => __("Add text for button 2", 'insurance')

      ),

      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Button Link 2", 'insurance'),

         "param_name" => "btnlink2",

         "value" => '',

         "description" => __("Add link for button 2", 'insurance')

      ),
      array(

        "type" => "dropdown",

        "heading" => __('Style Show', 'insurance'),

        "param_name" => "style",

        "value" => array(   
					__('None', 'insurance') => '',
                     __('Style 1: one button', 'insurance') => 'style1',

                     __('Style 2: right button ', 'insurance') => 'style2',

                     __('Style 3: two button', 'insurance') => 'style3',

                    ),

        "description" => __("Select style", 'insurance'),      

      )
    )
    ));

}

// Call To Action 2

if(function_exists('vc_map')){

   vc_map( array(

   "name" => __("OT Call To Action 2", 'insurance'),

   "base" => "cta2",

   "class" => "",

   "category" => 'Content',

   "icon" => "icon-st",

   "params" => array(
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Title", 'insurance'),

         "param_name" => "title",

         "value" => "",

         "description" => __("Title call to action", 'insurance')

      ),

      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Subtitle", 'insurance'),

         "param_name" => "stitle",

         "value" => '',

         "description" => __("Subtitle call to action", 'insurance')

      ),
      array(

         "type" => "textarea_html",

         "holder" => "div",

         "class" => "",

         "heading" => __("Details", 'insurance'),

         "param_name" => "content",

         "value" => '',

         "description" => __("Details call to action", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Button Text 1", 'insurance'),

         "param_name" => "btntext1",

         "value" => "",

         "description" => __("Add text for label button 1", 'insurance')

      ),

      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Button Link 1", 'insurance'),

         "param_name" => "btnlink1",

         "value" => '',

         "description" => __("Add link for button 1", 'insurance')

      ),

      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Button Text 2", 'insurance'),

         "param_name" => "btntext2",

         "value" => "",

         "description" => __("Add text for label button 2", 'insurance')

      ),

      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Button Link 2", 'insurance'),

         "param_name" => "btnlink2",

         "value" => '',

         "description" => __("Add link for button 2", 'insurance')

      ),
      array(

        "type" => "dropdown",

        "heading" => __('Style Call To Action', 'insurance'),

        "param_name" => "style",

        "value" => array(   
					__('None', 'insurance') => '',
                     __('Style1: Align Left', 'insurance') => 'style1',  

                     __('Style2: Align Center', 'insurance') => 'style2',                   

                    ),

        "description" => __("Section Overlay", 'insurance'),      

      ),
    )
    ));

}


// Buttons
if(function_exists('vc_map')){
   vc_map( array(

   "name" => __("OT Buttons", 'insurance'),

   "base" => "button",

   "class" => "",

   "category" => 'Content',

   "icon" => "icon-st",

   "params" => array(

        array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Icon", 'insurance'),

         "param_name" => "icon",

         "value" => '',

         "description" => __("Ex: heart. Find here: <a href='http://fontawesome.io/icons/'>http://fontawesome.io/icons</a>", 'insurance')

        ),
        array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Button Text", 'insurance'),

         "param_name" => "btntext",

         "value" => "Button Text",

         "description" => __("Add text for label button", 'insurance')

       ),
       array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Button Link", 'insurance'),

         "param_name" => "btnlink",

         "value" => '',

         "description" => __("Add link for button", 'insurance')

      ),

      array(

         "type" => "dropdown",

         "holder" => "div",

         "class" => "",

         "heading" => __("Button Type", 'insurance'),

         "param_name" => "type",

         "value" => array(   
                     __('Color', 'insurance') => 'color',  

                     __('Dark', 'insurance') => 'dark',

                     __('Border Color', 'insurance') => 'border1',

                     __('Border Dark', 'insurance') => 'border2',
                    ),

         "description" => __("Select style", 'insurance')

      ),
      array(

         "type" => "dropdown",

         "holder" => "div",

         "class" => "",

         "heading" => __("Button Size", 'insurance'),

         "param_name" => "size",

         "value" => array(   
                     __('Small', 'insurance') => 'small',  

                     __('Normal', 'insurance') => 'normal',

                     __('Large', 'insurance') => 'large',
                    ),

         "description" => __("Select size", 'insurance')

      ),
      
    )
    ));

}


//Testimonials by Davis Hoang
if(function_exists('vc_map')){
   vc_map( array(

   "name"      => __("OT Testimonials", 'insurance'),

   "base"      => "testimonials",

   "class"     => "",

   "icon" => "icon-st",

   "category"  => 'Content',

   "params"    => array(
      array(
         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Visible", 'insurance'),

         "param_name" => "num",

         "value" => "5",

         "description" => __("Number testimonials show.", 'insurance')
      ),
     array(

        "type" => "dropdown",

        "heading" => __('Style Testimonials', 'insurance'),

        "param_name" => "style",

        "value" => array(   
                     __('Style1: Dark Background ', 'insurance')    => 'style1',  

                     __('Style2: Vertical', 'insurance')    => 'style2',

                     __('Style2.1: Horizontal', 'insurance')  => 'style3',
                    ),

        "description" => __("Select style", 'insurance'),      

      )

    )));

}

// Form Search Agent
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("OT Search Agent", 'insurance'),
   "base"      => "searchagent",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Content',
   "params"    => array(
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Title", 'insurance'),
			 "param_name" => "title",
			 "value" => "",
			 "description" => __("", 'insurance')
		),
	  array(

         "type"      => "textarea_html",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Detail", 'insurance'),

         "param_name"=> "content",

         "value"     => "",

         "description" => __("Enter the content", 'insurance')

      ),
     array(

         "type"      => "textfield",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Button Submit", 'insurance'),

         "param_name"=> "btntext",

         "value"     => "",

         "description" => __("Add text for button", 'insurance')

      ), 
     array(
        "type" => "dropdown",
        "heading" => __('Search Type', 'insurance'),
        "param_name" => "searchagent_type",
        "value" => array(   
                     __('Search by Name', 'insurance')    => 'byname',  
                     __('Search by City', 'insurance')    => 'bycity',
                     __('Search by Zip Code', 'insurance')  => 'byzipcode',
                    ),
        "description" => __("Select style", 'insurance'),      
      )
    )));
}

//Newsletters
if(function_exists('vc_map')){

   vc_map( array(

   "name"      => __("OT Newsletters", 'insurance'),

   "base"      => "newsletter_insurance",

   "class"     => "",

   "icon" => "icon-st",

   "category"  => 'Content',

   "params"    => array(

     array(

         "type"      => "textfield",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Title", 'insurance'),

         "param_name"=> "title",

         "value"     => "",

         "description" => __("Enter the title", 'insurance')

      ),
      
     array(

         "type"      => "textfield",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Subtitle", 'insurance'),

         "param_name"=> "stitle",

         "value"     => "",

         "description" => __("Enter the subtitle", 'insurance')

      ),
     
     array(

         "type"      => "textarea_html",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Detail", 'insurance'),

         "param_name"=> "content",

         "value"     => "",

         "description" => __("Enter the content", 'insurance')

      ),
     array(

         "type"      => "textfield",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Button Submit", 'insurance'),

         "param_name"=> "btntext",

         "value"     => "",

         "description" => __("Add text for button", 'insurance')

      ),     
    )));

}


//Clients Logo by Davis Hoang

if(function_exists('vc_map')){

   vc_map( array(

   "name"      => __("OT Clients Logo", 'insurance'),

   "base"      => "clients",

   "class"     => "",

   "icon" => "icon-st",

   "category"  => 'Content',

   "params"    => array(

      array(

         "type"      => "attach_images",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Logo", 'insurance'),

         "param_name"=> "gallery",

         "value"     => "",

         "description" => __("Upload Logo Client", 'insurance')

         ),
         array(

         "type"      => "textfield",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Number Visible Or Row", 'insurance'),

         "param_name"=> "row",

         "value"     => "3",

         "description" => __("", 'insurance')

      ),

         array(

         "type" => "dropdown",

         "holder" => "div",

         "class" => "",

         "heading" => __("Style Show", 'insurance'),

         "param_name" => "style",

         "value" => array(   
                     __('Silder', 'insurance') => 'style1',  

                     __('Grid', 'insurance') => 'style2',
                    ),

         "description" => __("Select style", 'insurance')

      ),

    )));

}

// Latest News
if(function_exists('vc_map')){

   vc_map( array(

   "name"      => __("OT Latest News", 'insurance'),

   "base"      => "lproject",

   "class"     => "",

   "icon" => "icon-st",

   "category"  => 'Content',

   "params"    => array(

       array(

         "type"      => "textfield",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Title", 'insurance'),

         "param_name"=> "title",

         "value"     => "",

         "description" => __("Enter the title", 'insurance')

      ),   
      array(

         "type"      => "textfield",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Show number of Latest news", 'insurance'),

         "param_name"=> "number",

         "value"     => "",

         "description" => __("number latest news", 'insurance')

      ),
      array(

         "type"      => "textfield",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Show Number of excerpt length", 'insurance'),

         "param_name"=> "excerpt",

         "value"     => "",

         "description" => __("number excerpt length view.", 'insurance')

      ),     
      array(

        "type" => "dropdown",

        "heading" => __('Style Show', 'insurance'),

        "param_name" => "style",

        "value" => array(   
                     __('Style1: center', 'insurance') => 'style1',

                     __('Style2: left', 'insurance') => 'style2', 

                   

                    ),

        "description" => __("Select style", 'insurance'),      

      )

    )));

}

// Annual Reprort 
if(function_exists('vc_map')){

   vc_map( array(

   "name" => __("OT Annual Report", 'insurance'),

   "base" => "reports",

   "class" => "",

   "category" => 'Content',

   "icon" => "icon-st",

   "params" => array(
      array(

         "type" => "attach_image",

         "holder" => "div",

         "class" => "",

         "heading" => __("Image annual report", 'insurance'),

         "param_name" => "photo",

         "value" => '',

         "description" => __("upload Image", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Title", 'insurance'),

         "param_name" => "title",

         "value" => "",

         "description" => __("Enter the title for Annual report.", 'insurance')

      ),

      array(

         "type" => "textarea_html",

         "holder" => "div",

         "class" => "",

         "heading" => __("Details", 'insurance'),

         "param_name" => "content",

         "value" => '',

         "description" => __("Enter the description for Annual report", 'insurance')

      ),
      array(

         "type"      => "textfield",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Label Button", 'insurance'),

         "param_name"=> "btn",

         "value"     => "",

         "description" => __("Add text for label button", 'insurance')

      ),
     array(

         "type"      => "textfield",

         "holder"    => "div",

         "class"     => "",

         "heading"   => __("Link Button", 'insurance'),

         "param_name"=> "link",

         "value"     => "",

         "description" => __("Add link button", 'insurance')

      ),
      
    )));

}

// Dropcap
if(function_exists('vc_map')){

   vc_map( array(

   "name" => __("OT Dropcap", 'insurance'),

   "base" => "drop",

   "class" => "",

   "category" => 'Content',

   "icon" => "icon-st",

   "params" => array(
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Firstcharacter", 'insurance'),

         "param_name" => "character",

         "value" => "",

         "description" => __("Add first character", 'insurance')

      ),

      array(

         "type" => "textarea_html",

         "holder" => "div",

         "class" => "",

         "heading" => __("Details", 'insurance'),

         "param_name" => "content",

         "value" => '',

         "description" => __("Enter the details", 'insurance')

      ),
     
      array(

        "type" => "dropdown",

        "heading" => __('Style Testimonials', 'insurance'),

        "param_name" => "style",

        "value" => array(   
                     __('Style1: not box ', 'insurance')    => 'style1',  

                     __('Style2: box style', 'insurance')    => 'style2',


                    ),

        "description" => __("Select style", 'insurance'),      

      )
      
    )));

}

// Produc thumb 

if(function_exists('vc_map')){

   vc_map( array(

   "name" => __("OT Product thumb", 'insurance'),

   "base" => "prothumb",

   "class" => "",

   "category" => 'Content',

   "icon" => "icon-st",

   "params" => array(
      array(

         "type" => "attach_image",

         "holder" => "div",

         "class" => "",

         "heading" => __("Image", 'insurance'),

         "param_name" => "photo",

         "value" => '',

         "description" => __("upload Image", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Title", 'insurance'),

         "param_name" => "title",

         "value" => "",

         "description" => __("Enter the title", 'insurance')

      ),

      array(

         "type" => "textarea_html",

         "holder" => "div",

         "class" => "",

         "heading" => __("Details", 'insurance'),

         "param_name" => "content",

         "value" => '',

         "description" => __("Enter the content", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Button Text 1", 'insurance'),

         "param_name" => "btntext1",

         "value" => "",

         "description" => __("Add text button 1", 'insurance')

      ),

      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Button Link 1", 'insurance'),

         "param_name" => "btnlink1",

         "value" => '',

         "description" => __("Add link button 1", 'insurance')

      ),

      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Button Text 2", 'insurance'),

         "param_name" => "btntext2",

         "value" => "",

         "description" => __("Add text for label button 2", 'insurance')

      ),

      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Button Link 2", 'insurance'),

         "param_name" => "btnlink2",

         "value" => '',

         "description" => __("Add link button 2", 'insurance')

      ),
      array(

        "type" => "dropdown",

        "heading" => __('Style Testimonials', 'insurance'),

        "param_name" => "style",

        "value" => array(   
                     __('Style1: image ', 'insurance')    => 'style1',  

                     __('Style2: text in image', 'insurance')    => 'style2',


                    ),

        "description" => __("Select style", 'insurance'),      

      )
      
    )));

}

// Team

if(function_exists('vc_map')){

   vc_map( array(

   "name" => __("OT Our Team", 'insurance'),

   "base" => "team",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

      array(

         "type" => "attach_image",

         "holder" => "div",

         "class" => "",

         "heading" => __("Photo", 'insurance'),

         "param_name" => "photo",

         "value" => "",

         "description" => __("Image of team: 500x500", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Name", 'insurance'),

         "param_name" => "name",

         "value" => "John Doe",

         "description" => __("Name of team", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Location", 'insurance'),

         "param_name" => "job",

         "value" => "",

         "description" => __("Job of team", 'insurance')

      ),
      array(

         "type" => "textarea",

         "holder" => "div",

         "class" => "",

         "heading" => __("Details", 'insurance'),

         "param_name" => "content",

         "value" => "",

         "description" => __("Details of team", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Icon Social 1", 'insurance'),

         "param_name" => "icon1",

         "value" => "",

         "description" => __("Icon of social 1", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Link Social 1", 'insurance'),

         "param_name" => "soc1",

         "value" => "",

         "description" => __("Link of social 1", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Icon Social 2", 'insurance'),

         "param_name" => "icon2",

         "value" => "",

         "description" => __("Icon of social 2", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Link Social 2", 'insurance'),

         "param_name" => "soc2",

         "value" => "",

         "description" => __("Link of social 2", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Icon Social 3", 'insurance'),

         "param_name" => "icon3",

         "value" => "",

         "description" => __("Icon of social 3", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Link Social 3", 'insurance'),

         "param_name" => "soc3",

         "value" => "",

         "description" => __("Link of social 3", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Icon Social 4", 'insurance'),

         "param_name" => "icon4",

         "value" => "",

         "description" => __("Icon of social 4", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Link Social 4", 'insurance'),

         "param_name" => "soc4",

         "value" => "",

         "description" => __("Link of social 4", 'insurance')

      ),
    )));

}

// List Box

if(function_exists('vc_map')){

   vc_map( array(

   "name" => __("OT List Box", 'insurance'),

   "base" => "list",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("title", 'insurance'),

         "param_name" => "title",

         "value" => "",

         "description" => __("Enter the title", 'insurance')

      ),
      array(

         "type" => "textarea_html",

         "holder" => "div",

         "class" => "",

         "heading" => __("Details", 'insurance'),

         "param_name" => "content",

         "value" => "",

         "description" => __("Enter the content", 'insurance')

      ),
    )));

}

//Career Box
if(function_exists('vc_map')){

   vc_map( array(

   "name" => __("OT Career Box", 'insurance'),

   "base" => "cabo",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

      array(

         "type" => "attach_image",

         "holder" => "div",

         "class" => "",

         "heading" => __("photo", 'insurance'),

         "param_name" => "photo",

         "value" => "",

         "description" => __("upload image", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("title", 'insurance'),

         "param_name" => "title",

         "value" => "",

         "description" => __("Enter the title", 'insurance')

      ),
      array(

         "type" => "textarea_html",

         "holder" => "div",

         "class" => "",

         "heading" => __("Details", 'insurance'),

         "param_name" => "content",

         "value" => "",

         "description" => __("Enter the content", 'insurance')

      ),
       array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("label button", 'insurance'),

         "param_name" => "btntext",

         "value" => "",

         "description" => __("", 'insurance')

      ),
        array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Link button", 'insurance'),

         "param_name" => "btnlink",

         "value" => "",

         "description" => __("", 'insurance')

      ),
      
      array(

        "type" => "dropdown",

        "heading" => __('Style Show', 'insurance'),

        "param_name" => "style",

        "value" => array(   
                     __('Style 1: career', 'insurance') => 'style1',

                     __('Style 2: agent', 'insurance') => 'style2',

                    ),

        "description" => __("Select style", 'insurance'),      

      ),
    )
    ));

}


// Contact Info

if(function_exists('vc_map')){

   vc_map( array(

   "name" => __("OT Contact Info", 'insurance'),

   "base" => "cinfo",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Icon", 'insurance'),

         "param_name" => "icon",

         "value" => "",

         "description" => __("Ex: heart. Find here: <a href='http://fontawesome.io/icons/'>http://fontawesome.io/icons</a>", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("title", 'insurance'),

         "param_name" => "title",

         "value" => "",

         "description" => __("Enter the title", 'insurance')

      ),
      array(

         "type" => "textarea_html",

         "holder" => "div",

         "class" => "",

         "heading" => __("Details", 'insurance'),

         "param_name" => "content",

         "value" => "",

         "description" => __("Enter the content", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Label Button", 'insurance'),

         "param_name" => "btn",

         "value" => "",

         "description" => __("Add text for button", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Link Button", 'insurance'),

         "param_name" => "link",

         "value" => "",

         "description" => __("Add link button", 'insurance')

      ),
      array(

        "type" => "dropdown",

        "heading" => __('Style Show', 'insurance'),

        "param_name" => "style",

        "value" => array(   
                     __('Style 1: icon center', 'insurance') => 'style1',

                     __('Style 2: icon left', 'insurance') => 'style2',

                     __('Style 3: icon left big', 'insurance') => 'style3',

                     __('Style 4:not icon', 'insurance') => 'style4',

                    ),

        "description" => __("Select style", 'insurance'),      

      ),
    )
    ));

}

// Process Box

if(function_exists('vc_map')){

   vc_map( array(

   "name" => __("OT Process Box", 'insurance'),

   "base" => "processb",

   "class" => "",

   "icon" => "icon-st",

   "category" => 'Content',

   "params" => array(

      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("number", 'insurance'),

         "param_name" => "number",

         "value" => "",

         "description" => __("Enter the number", 'insurance')

      ),
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("title", 'insurance'),

         "param_name" => "title",

         "value" => "",

         "description" => __("Enter the title", 'insurance')

      ),
      array(

         "type" => "textarea_html",

         "holder" => "div",

         "class" => "",

         "heading" => __("Details", 'insurance'),

         "param_name" => "content",

         "value" => "",

         "description" => __("Enter the content", 'insurance')

      ),
      
      array(

        "type" => "dropdown",

        "heading" => __('Style Show', 'insurance'),

        "param_name" => "style",

        "value" => array(   
                     __('Style 1: icon center', 'insurance') => 'style1',

                     __('Style 2: icon left', 'insurance') => 'style2',

                    ),

        "description" => __("Select style", 'insurance'),      

      ),
    )
    ));

}

// Login Box

if(function_exists('vc_map')){

   vc_map( array(

   "name" => __("OT Login Box", 'insurance'),

   "base" => "pippin_login_form_fields",

   "class" => "",

   "category" => 'Content',

   "icon" => "icon-st",

   "params" => array(
      
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Title", 'insurance'),

         "param_name" => "title",

         "value" => "",

         "description" => __("Title login.", 'insurance')

      ),

      array(

         "type" => "textarea_html",

         "holder" => "div",

         "class" => "",

         "heading" => __("detail", 'insurance'),

         "param_name" => "content",

         "value" => '',

         "description" => __("Enter the content", 'insurance')

      ),
     
      
    )));

}

// Register Box

if(function_exists('vc_map')){

   vc_map( array(

   "name" => __("OT Register Box", 'insurance'),

   "base" => "register",

   "class" => "",

   "category" => 'Content',

   "icon" => "icon-st",

   "params" => array(
      
      array(

         "type" => "textfield",

         "holder" => "div",

         "class" => "",

         "heading" => __("Title", 'insurance'),

         "param_name" => "title",

         "value" => "",

         "description" => __("Enter the title.", 'insurance')

      ),

      array(

         "type" => "textarea_html",

         "holder" => "div",

         "class" => "",

         "heading" => __("detail", 'insurance'),

         "param_name" => "content",

         "value" => '',

         "description" => __("Enter the content", 'insurance')

      ),
     
      
    )));

}

?>