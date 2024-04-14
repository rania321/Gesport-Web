<?php

namespace App\Test\Controller;

use App\Entity\Vente;
use App\Repository\VenteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class VenteControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private VenteRepository $repository;
    private string $path = '/vente/';
    private EntityManagerInterface $manager;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Vente::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Vente index');

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
            'vente[quantitév]' => 'Testing',
            'vente[datev]' => 'Testing',
            'vente[montantv]' => 'Testing',
            'vente[Produit]' => 'Testing',
            'vente[User]' => 'Testing',
        ]);

        self::assertResponseRedirects('/vente/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Vente();
        $fixture->setQuantitév('My Title');
        $fixture->setDatev('My Title');
        $fixture->setMontantv('My Title');
        $fixture->setProduit('My Title');
        $fixture->setUser('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Vente');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Vente();
        $fixture->setQuantitév('My Title');
        $fixture->setDatev('My Title');
        $fixture->setMontantv('My Title');
        $fixture->setProduit('My Title');
        $fixture->setUser('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'vente[quantitév]' => 'Something New',
            'vente[datev]' => 'Something New',
            'vente[montantv]' => 'Something New',
            'vente[Produit]' => 'Something New',
            'vente[User]' => 'Something New',
        ]);

        self::assertResponseRedirects('/vente/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getQuantitév());
        self::assertSame('Something New', $fixture[0]->getDatev());
        self::assertSame('Something New', $fixture[0]->getMontantv());
        self::assertSame('Something New', $fixture[0]->getProduit());
        self::assertSame('Something New', $fixture[0]->getUser());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Vente();
        $fixture->setQuantitév('My Title');
        $fixture->setDatev('My Title');
        $fixture->setMontantv('My Title');
        $fixture->setProduit('My Title');
        $fixture->setUser('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/vente/');
    }
}
