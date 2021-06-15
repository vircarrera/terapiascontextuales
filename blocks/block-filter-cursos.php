<!-- Este filto se hace usando las taxonomías. Su resultado se controla en taxonomy.php -->

<div class="b-filter">
  <?php
    $tax = 'patient-typology';
    $terms = get_terms($tax, array(
      'orderby'    => 'name',
      'order'      => 'ASC',
      'hide_empty' => 0,
      'parent'   	 => 0
    ));
  ?>
  <ul>
    <li><strong>Problema psicológico</strong></li>
  <?php 
    foreach ($terms as $term) :
    $term_link = get_term_link($term); 
  ?>
    <li class="e-filters">
        <a href="<?php echo $term_link; ?>" class="filter__link" data-filter=".<?php echo $term->slug; ?>">
          <?php echo $term->name; ?>
        </a>
    </li>
  <?php endforeach; ?>
  </ul>

  <?php
    $tax = 'intervention-type';
    $terms = get_terms($tax, array(
      'orderby'    => 'name',
      'order'      => 'ASC',
      'hide_empty' => 0,
      'parent'   	 => 0
    ));
  ?>
  <ul>
  <li><strong>Tipo de intervención</strong></li>
  <?php 
    foreach ($terms as $term) :
        $term_link = get_term_link($term); 
  ?>
    <li class="e-filters">
      <a href="<?php echo $term_link; ?>" class="filter__link" data-filter=".<?php echo $term->slug; ?>">
        <?php echo $term->name; ?>
      </a>
    </li>
  <?php endforeach; ?>
  </ul>

  <?php
    $tax = 'course-duration';
    $terms = get_terms($tax, array(
      'orderby'    => 'name',
      'order'      => 'ASC',
      'hide_empty' => 0,
      'parent'   	 => 0
    ));
  ?>
  <ul>
    <li><strong>Duración del curso</strong></li>
  <?php 
    foreach ($terms as $term) :
      $term_link = get_term_link($term); 
  ?>
    <li class="e-filters">
        <a href="<?php echo $term_link; ?>" class="filter__link" data-filter=".<?php echo $term->slug; ?>">
          <?php echo $term->name; ?>
        </a>
    </li>
  <?php endforeach; ?>
  </ul>
    
</div>