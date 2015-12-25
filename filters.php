<section class="house_filters_chose">

	<div <?php if ( is_page_template( 'sale.php' ) ) echo 'class="active"'; ?> >
		<a href="/">Продажа</a>
	</div>

	<div <?php if ( is_page_template( 'rent.php' ) ) echo 'class="active"'; ?> >
		<a href="/rent/">Аренда</a>
	</div>

	

	<div <?php if ( is_page_template( 'change.php' ) ) echo 'class="active"'; ?> >
		<a href="/trade/">Обмен</a>
	</div>

</section>


<section class="house_filters">

	<form method="post" name="house_filters" action="">

		<?php

		/**
		 *		категория объекта
		 */
		$property_type = get_terms( 'property_type' );
		if ( ! empty( $property_type ) && ! is_wp_error( $property_type ) ){
			echo '<div class="filter-element">';
			echo '<label for="property_type">';
			echo 'Категория объекта:';
			echo '</label>';
			
			echo '<select class="property_type" name="house_property_type">';

				echo '<option value="all" >Все</option>';
				foreach ( $property_type as $term ) {

					echo '<option value="' . $term->slug . '"';

					if ( $term->slug == $house_property_type ) {
						echo ' selected="selected"'; 
					}

					echo '>';
					echo $term->name;
					echo '</option>';
				}

			echo '</select>';
			echo '</div>';
		}

		/**
		 *		направление
		 */
		$house_direction = get_terms( 'house_direction' );
		if ( ! empty( $house_direction ) && ! is_wp_error( $house_direction ) ){
			echo '<div class="filter-element">';
			echo '<label for="house_direction">';
			echo 'Направление:';
			echo '</label>';
			
			echo '<select class="house_direction" name="direction">';

				echo '<option value="all" >Все</option>';
				foreach ( $house_direction as $term ) {

					echo '<option value="' . $term->slug . '"';

					if ( $term->slug == $direction ) {
						echo ' selected="selected"'; 
					}

					echo '>';
					echo $term->name;
					echo '</option>';
				}

			echo '</select>';
			echo '</div>';
		}


		/**
		 *		типы 
		 */
		$house_categories = get_terms( 'house_categories' );
		if ( ! empty( $house_categories ) && ! is_wp_error( $house_categories ) ){
			echo '<div class="filter-element">';
			echo '<label for="house_categories">';
			echo 'Тип:';
			echo '</label>';
			
			echo '<select class="house_categories" name="house_type">';

				echo '<option value="all" >Все</option>';
				foreach ( $house_categories as $term ) {

					echo '<option value="' . $term->slug . '"';

					if ( $term->slug == $house_type ) {
						echo ' selected="selected"'; 
					}
					echo '>';
					echo $term->name;
					echo '</option>';
				}

			echo '</select>';
			echo '</div>';
		}


		/**
		 * 	районы
		 */
		
		$house_location = get_terms( 'house_location' );
		if ( ! empty( $house_location ) && ! is_wp_error( $house_location ) ){
			echo '<div class="filter-element">';
			echo '<label for="house_location">';
			echo 'Район:';
			echo '</label>';
			
			echo '<select class="house_location" name="house_location_filter" >';

				echo '<option value="all" >Все</option>';
				foreach ( $house_location as $term ) {

					echo '<option value="' . $term->slug . '"';

					if ( $term->slug == $house_location_filter ) {
						echo ' selected="selected"'; 
					}
					echo '>';
					echo $term->name;
					echo '</option>';
				}

			echo '</select>';
			echo '</div>';
			
		}

		/**
		 * 	количество комнат
		 */

		?>

		<div class="filter-element large_label">
			<label class="large_label label_rooms">Комнат:</label>
			<input type="text" placeholder="От" name="rooms_from"> - <input name="rooms_too" type="text" placeholder="До">		
		</div>


		<?php 


		/**
		 *		этаж от до
		 */

		?>

		<div class="filter-element large_label">
			<label class="large_label label_rooms">Этаж:</label>
			<input name="floor_from" type="text" placeholder="<?php if (isset($floor_from)) echo $floor_from; else echo 'От'; ?>" > -
			<input name="floor_too" type="text" placeholder="<?php if (isset($floor_too)) echo $floor_too; else echo 'До'; ?>">		
		</div>




		<?php 

		/**
		 * 	площадь
		 */

		?>

		<div class="filter-element large_label">
			<label class="large_label">Площадь:</label>
			<input type="text" placeholder="От" name="area_from"> - <input name="area_too" type="text" placeholder="До">
		</div>




		<?php

		/**
		 * 	цена
		 */

		?>

		<div class="filter-element large_label">
			<label class="">Цена ($):</label>

			<input name="price_from" type="text" placeholder="<?php if (isset($price_from)) echo $price_from; else echo 'От'; ?>" > -
			<input name="price_too" type="text" placeholder="<?php if (isset($price_too)) echo $price_too; else echo 'До'; ?>">
		</div>

		
		


		<?php 

		

		


		


		/**
		 *		вид постройки
		 */
		$house_build_type = get_terms( 'house_build_type' );
		if ( ! empty( $house_build_type ) && ! is_wp_error( $house_build_type ) ){
			echo '<div class="filter-element">';
			echo '<label for="house_build_type">';
			echo 'Вид постройки:';
			echo '</label>';
			
			echo '<select class="house_build_type" name="build_type">';

				echo '<option value="all" >Все</option>';
				foreach ( $house_build_type as $term ) {

					echo '<option value="' . $term->slug . '"';

					if ( $term->slug == $build_type ) {
						echo ' selected="selected"'; 
					}

					echo '>';
					echo $term->name;
					echo '</option>';
				}

			echo '</select>';
			echo '</div>';
		}


		

		?>



		<input class="search_house" type="submit" value="Искать" name="house_filters_submit">

	</form>

</section>