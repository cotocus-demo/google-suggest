<?php
   $post_data = array(
      "item" => array(
            "item_type_id" => 1,
            "tring_key" => "AA",
            "string_value" => "Hello",   
            "string_extra" => "App",
            "is_public" => 1,
            "is_public_for_contacts" => 0
      )
   );
   echo json_encode($post_data)."\n";
?>