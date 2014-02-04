              <h5>Modelo Semana</h5>
                    <li>
                      <div class="<?php echo $divname; ?>">
                          <a href="<?php echo $item->get_permalink(); ?>"
                            <?php if ($target == 'newwindow') { echo 'target="_BLANK" '; }; ?>
                            title="<?php echo $item->get_title().' - Postada em '.$item->get_date('d M Y, H:i'); ?>">
                            <?php if ($thumb = $item->get_item_tags(SIMPLEPIE_NAMESPACE_MEDIARSS, 'thumbnail') ) {
                                $thumb = $thumb[0]['attribs']['']['url'];
                                echo '<div style="background-image:url('http://s3.hoy.com.ni/wp-content/uploads/sites/51/2013/11/laprensa-logohoy.png');" id="modelosemana" src="'.$thumb.'"';
                                echo ' alt="'.$item->get_title().'"/></div>';
                             } else if ( $useenclosures == 'yes' && $enclosure = $item->get_enclosure() ) {
                                $enclosure = $item->get_enclosures();
                                echo '<div style="background-image:http://s3.hoy.com.ni/wp-content/uploads/sites/51/2013/11/laprensa-logohoy.png" id="modelosemana" src="'.$enclosure[0]->get_link().'"';
                                echo ' alt="'.$item->get_title().'"/></div>';
                            }  else {
                                preg_match_all('/<img[^>]+>/i',$item->get_content(), $images);
                                if ($images) {
                                  //echo $images[0][0];
                                  echo '<span class="' . $thumb . '">' . $images[0][0] . '</span>';
                                } else {
                                  echo "thumbnail not available";
                                }
                            }
                            if ($printtext) {
                              if ($printtext != 'no') {
                                echo "<div class='imgtitle'>".$item->get_title()."</div>";
                              }
                            }?>
                          </a>
                      </div>
                    </li>
