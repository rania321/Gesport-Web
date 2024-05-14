<?php

namespace App\Test\Controller;

use App\Entity\Reservationactivite;
use App\Repository\ReservationactiviteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReservationactiviteControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private ReservationactiviteRepository $repository;
    private string $path = '/reservationactivite/';
    private EntityManagerInterface $manager;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Reservationactivite::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Reservationactivite index');

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
            'reservationactivite[datedebutr]' => 'Testing',
            'reservationactivite[heurer]' => 'Testing',
            'reservationactivite[statutr]' => 'Testing',
            'reservationactivite[ida]' => 'Testing',
            'reservationactivite[idu]' => 'Testing',
        ]);

        self::assertResponseRedirects('/reservationactivite/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Reservationactivite();
        $fixture->setDatedebutr('My Title');
        $fixture->setHeurer('My Title');
        $fixture->setStatutr('My Title');
        $fixture->setIda('My Title');
        $fixture->setIdu('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Reservationactivite');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Reservationactivite();
        $fixture->setDatedebutr('My Title');
        $fixture->setHeurer('My Title');
        $fixture->setStatutr('My Title');
        $fixture->setIda('My Title');
        $fixture->setIdu('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'reservationactivite[datedebutr]' => 'Something New',
            'reservationactivite[heurer]' => 'Something New',
            'reservationactivite[statutr]' => 'Something New',
            'reservationactivite[ida]' => 'Something New',
            'reservationactivite[idu]' => 'Something New',
        ]);

        self::assertResponseRedirects('/reservationactivite/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getDatedebutr());
        self::assertSame('Something New', $fixture[0]->getHeurer());
        self::assertSame('Something New', $fixture[0]->getStatutr());
        self::assertSame('Something New', $fixture[0]->getIda());
        self::assertSame('Something New', $fixture[0]->getIdu());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Reservationactivite();
        $fixture->setDatedebutr('My Title');
        $fixture->setHeurer('My Title');
        $fixture->setStatutr('My Title');
        $fixture->setIda('My Title');
        $fixture->setIdu('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/reservationactivite/');
    }
}
