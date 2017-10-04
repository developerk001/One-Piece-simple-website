<?php
	function getVideo($value) {
		$video  = '';
		$video .= '<div class="col-lg-4 col-md-6 col-sm-6">';
		$video .= '    <img class="img-thumbnail" src="img/thumbnail.png" alt="Episode' . $value['Episode'] . '" data-toggle="modal" data-target="#' . $value['Episode'] . '">';
		$video .= '     <p class="text-center">'. $value['Episode'] .'</p>';
		$video .= '    <div id="' . $value['Episode'] . '" class="modal fade" role="dialog">';
		$video .= '	       <div class="modal-dialog">';
		$video .= '		       <div class="modal-content">';
		$video .= '			       <div class="modal-header">';
		$video .= '				       <button type="button" class="close" data-dismiss="modal">&times;</button>';
		$video .= '				       <h2 class="modal-title text-center">' . $value['Episode'] . '</h2>';
		$video .= '				   </div>';
		$video .= '				   <div class="modal-body">';
		$video .= '                    <p class="text-center">' . $value['Title'] . '</p>';
		$video .= '				       <center><iframe width="100%" height="300px" src="' . $value['Source'] . '" allowfullscreen></iframe></center>';
		$video .= '				   </div>';
		$video .= '				   <div class="modal-footer">';
		$video .= '				       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
		$video .= '				   </div>';
		$video .= '		        </div>';
		$video .= '		    </div>';
		$video .= '	    </div>';
		$video .= '	</div>';
		return $video;
	}
?>