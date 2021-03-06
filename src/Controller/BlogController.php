<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Entity\Category;
use App\Form\CommentType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'blog')]
    public function index(ArticleRepository $repo): Response
    {
        $articles = $repo->findAll();

        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
        ]);
    }

    #[Route("/", name: 'home')]
    public function home()
    {
        return $this->render('blog/home.html.twig',[
            'title' => 'Welcome to the Isocel Blog !',
            'age' => '16'
        ]);
    }

    #[Route("/blog/new", name: 'blog_create')]
    #[Route("/blog/{id}/edit", name: 'blog_edit')]
    public function form(Article $article = null, Request $request, EntityManagerInterface $manager)
    {
        if(!$article) {
            $article = new Article();
        }
        
        $form = $this->createFormBuilder($article)
                    ->add('title')
                    ->add('category', EntityType::class, [
                        'class' => Category::class,
                        'choice_label' => 'title'
                    ])
                    ->add('content')
                    ->add('image')
                    ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            if(!$article->getId()) {
                $article->setCreatedAt(new \DateTime());
            }
            
            $manager->persist($article);
            $manager->flush();
            
            return $this->redirectToRoute('blog_show', ['id' => $article->getId()]);
        } else if($form->isSubmitted() && !$form->isValid()) {
            
        }

        return $this->render('blog/create.html.twig', [
            'formArticle' => $form->createView(),
            'editMode' => $article->getId() !== null
        ]);
    }

    #[Route("/blog/{id}", name: 'blog_show')]
    public function show(Article $article)  {

        $comment = new Comment();

        $form = $this->createForm(CommentType::class);
        

        return $this->render('blog/show.html.twig', [
            'article' => $article,
            'commentForm' => $form->createView()
        ]);
    }
}
