<?php
class ArticleTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('articles')->delete();

		Article::create(array(
			'post_autor' => 'Chris Sevilleja',
			'thema' => 'Virtual Mashine',
			'text' => 'Look I am a test comment.'
		));

		Article::create(array(
			'post_autor' => 'Paul Panter',
			'thema' => 'Angular',
			'text' => 'This is going to be super crazy with Angular.'
		));

		Article::create(array(
			'post_autor' => 'Fritz Schröbel',
			'thema' => 'Laravel',
			'text' => 'I am a master of Laravel.'
		));
	}

}
	