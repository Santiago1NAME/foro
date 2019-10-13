<?php

class CreatePostsTests extends FeatureTestCase
{
    public function test_a_user_create_a_post()
    {
        //PREGUNTA
        $title = "Esta es una pregunta";
        $content = "Este es el contenido";

        
        $this->actingAs($user = $this->defaultUser());

        
        //USUARIO CONECTADO
        $this->visit(route('posts.create'))
            ->type($title, 'title')
            ->type($content, 'content')
            ->press('Publicar');

        //RESULTADO
        $this->seeInDatabase('posts', [
           'title' => $title,
           'content' => $content,
           'pending' => true,
           'user_id' => $user->id,
        ]);

        //REDIRIGIDO AL POSTS
        $this->see($title);
    }

}