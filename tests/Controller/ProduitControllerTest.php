<?php

namespace App\Test\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProduitControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private ProduitRepository $repository;
    private string $path = '/produit/';
    private EntityManagerInterface $manager;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Produit::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Produit index');

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
            'produit[nomp]' => 'Testing',
            'produit[descrip]' => 'Testing',
            'produit[prixp]' => 'Testing',
            'produit[stockp]' => 'Testing',
            'produit[dateajoutp]' => 'Testing',
            'produit[imagep]' => 'Testing',
            'produit[referencep]' => 'Testing',
        ]);

        self::assertResponseRedirects('/produit/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Produit();
        $fixture->setNomp('My Title');
        $fixture->setDescrip('My Title');
        $fixture->setPrixp('My Title');
        $fixture->setStockp('My Title');
        $fixture->setDateajoutp('My Title');
        $fixture->setImagep('My Title');
        $fixture->setReferencep('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Produit');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Produit();
        $fixture->setNomp('My Title');
        $fixture->setDescrip('My Title');
        $fixture->setPrixp('My Title');
        $fixture->setStockp('My Title');
        $fixture->setDateajoutp('My Title');
        $fixture->setImagep('My Title');
        $fixture->setReferencep('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'produit[nomp]' => 'Something New',
            'produit[descrip]' => 'Something New',
            'produit[prixp]' => 'Something New',
            'produit[stockp]' => 'Something New',
            'produit[dateajoutp]' => 'Something New',
            'produit[imagep]' => 'Something New',
            'produit[referencep]' => 'Something New',
        ]);

        self::assertResponseRedirects('/produit/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getNomp());
        self::assertSame('Something New', $fixture[0]->getDescrip());
        self::assertSame('Something New', $fixture[0]->getPrixp());
        self::assertSame('Something New', $fixture[0]->getStockp());
        self::assertSame('Something New', $fixture[0]->getDateajoutp());
        self::assertSame('Something New', $fixture[0]->getImagep());
        self::assertSame('Something New', $fixture[0]->getReferencep());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Produit();
        $fixture->setNomp('My Title');
        $fixture->setDescrip('My Title');
        $fixture->setPrixp('My Title');
        $fixture->setStockp('My Title');
        $fixture->setDateajoutp('My Title');
        $fixture->setImagep('My Title');
        $fixture->setReferencep('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/produit/');
    }
}
