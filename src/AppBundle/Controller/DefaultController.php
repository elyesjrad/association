<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Mukadi\Chart\Utils\RandomColorFactory;
use Mukadi\Chart\Chart;
use Mukadi\ChartJSBundle\Chart\NativeBuilder;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */



    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }







 /*  private $mailer;

    public function __construct(\Swift_Mailer $mailer) {
        $this->mailer = $mailer;
    }
    public function sendMail($target, $subject, $content) {
        $message = (new \Swift_Message($subject))
            ->setFrom('***@gmail.com')
            ->setTo($target)
            ->setBody($content, 'text/html');

        return $this->mailer->send($message);
    }
    public function testSendMail() {
        // GIVEN
        $transport = (new \Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
            ->setUsername('meriembader8@gmail.com')
            ->setPassword('naym@r689');
        $swiftMailer = new \Swift_Mailer($transport);
        $mailSender = new MailSender($swiftMailer);

        // WHEN
        $mailsSent = $mailSender->sendMail('meriem.bader8@esprit.tn', 'testMail', 'The Mailsender works!');

        // THEN
        $this->assertEquals($mailsSent, 1);
    }*/
}
