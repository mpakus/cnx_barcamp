      <div class="hero-unit">
        <h2>Спасибо, <?= $user['first_name'] ?></h2>
        <p>Еще один шаг, расскажите свои интересы:</p>
		<form method="POST" action="">
		    <div class="error"><?php echo validation_errors(); ?></div>
			<label>Интересы:</label>
			<input type="text" class="span8" name="interest" placeholder="Перечислите ваши интересы через запятую">
			<button type="submit" class="btn btn-primary btn-large">Присоединиться</button>
		</form>
      </div>
      
