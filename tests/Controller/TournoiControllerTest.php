<?php

namespace App\Test\Controller;

use App\Entity\Tournoi;
use App\Repository\TournoiRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TournoiControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private TournoiRepository $repository;
    private string $path = '/tournoi/';
    private EntityManagerInterface $manager;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Tournoi::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Tournoi index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'tournoi[nomt]' => 'Testing',
            'tournoi[datedebutt]' => 'Testing',
            'tournoi[datefint]' => 'Testing',
            'tournoi[descrit]' => 'Testing',
            'tournoi[statutt]' => 'Testing',
        ]);

        self::assertResponseRedirects('/tournoi/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Tournoi();
        $fixture->setNomt('My Title');
        $fixture->setDatedebutt('My Title');
        $fixture->setDatefint('My Title');
        $fixture->setDescrit('My Title');
        $fixture->setStatutt('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Tournoi');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Tournoi();
        $fixture->setNomt('My Title');
        $fixture->setDatedebutt('My Title');
        $fixture->setDatefint('My Title');
        $fixture->setDescrit('My Title');
        $fixture->setStatutt('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'tournoi[nomt]' => 'Something New',
            'tournoi[datedebutt]' => 'Something New',
            'tournoi[datefint]' => 'Something New',
            'tournoi[descrit]' => 'Something New',
            'tournoi[statutt]' => 'Something New',
        ]);

        self::assertResponseRedirects('/tournoi/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getNomt());
        self::assertSame('Something New', $fixture[0]->getDatedebutt());
        self::assertSame('Something New', $fixture[0]->getDatefint());
        self::assertSame('Something New', $fixture[0]->getDescrit());
        self::assertSame('Something New', $fixture[0]->getStatutt());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Tournoi();
        $fixture->setNomt('My Title');
        $fixture->setDatedebutt('My Title');
        $fixture->setDatefint('My Title');
        $fixture->setDescrit('My Title');
        $fixture->setStatutt('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/tournoi/');
    }
}
