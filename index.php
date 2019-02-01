<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage SoftSalmon
 * @since 1.0.0
 */

 ?>

 <?php get_header( 'article' );

 ?>

  <main>

    <?php
      // Aller chercher les articles
      $data = get_post(get_the_id());
      ?>

      <!-- Penny lane, is in my hears and in my eyes...  :) -->
      <article class="article">
        <div class="texte">
          <?php
          // article
          echo $data->post_content;
          ?>
        </div>

        <div class="meta">
          Auteur :
          <?php
            $author_obj = get_user_by('id', $data->post_author);
            echo $author_obj->user_login;
          ?>
          | Date :
          <?php
            echo $data->post_date;
          ?>
          <?php
             if (
               is_user_logged_in()
               && $author_obj->ID == get_current_user_id()
              ) {
          ?>
          | <a href="<?php echo get_edit_post_link( $comment->comment_post_ID, $context ); ?>">
              Editer
            </a>
            <?php
            }
          ?>
      </div>

      </article>

      <aside class="list-comm">

        <?php
          // IMPORTER LES commentaires
          $allcomment = get_comments();
          foreach($allcomment as $comment){
            // Ne garder que les commentaires de l'article affiché
            if ($comment->comment_post_ID == $data->ID){
              ?>

                <div class="comm-unique">
                    <?php
                    $com_author_obj = get_user_by('id', $data->post_author);
                    echo get_avatar( $com_author_obj->ID, 64, $default, 'user avatar' );
                    ?>

                  <div class="texte">
                    <?php
                      echo $comment ->comment_content;
                    ?>

                    <div class="meta">
                      Author : <?php echo $comment ->comment_author;  ?>
                      | Date : <?php echo $comment->comment_date;  ?>
                      | <a href="">
                          Editer
                        </a>
                      | <a href="">
                          Supprimer
                        </a>
                    </div>
                  </div>
                </div>

              <?php
            }
          }
        ?>
      </aside>

      <div class="postCommentForm">
      <?php
        comment_form();
      ?>
      </div>

  </main>
