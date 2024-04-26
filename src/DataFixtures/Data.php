<?php

namespace App\DataFixtures;

use App\Entity\Page;
use App\Entity\User;
use App\Entity\Address;
use App\Entity\Product;
use App\Entity\Setting;
use App\Entity\Sliders;
use App\Entity\Category;
use App\Entity\Collection;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class Data extends Fixture
{
    private $appKernel;
    private $rootDir;

    public function __construct(
        KernelInterface $appKernel,
        public UserPasswordHasherInterface $userPasswordHasher
        )
    {
        $this->appKernel = $appKernel;
        $this->rootDir = $appKernel->getProjectDir();
    }
    
    public function load(ObjectManager $manager): void
    {

        //1- CATEGORIES
        $filename = $this->rootDir.'/src/DataFixtures/Data/categories.json';
	    $data = file_get_contents($filename);
        $categories_json = json_decode($data);
        $categories = [];
        foreach ($categories_json as $categorie_item) {
            # code...
            
            $category = new Category();
            $category->setName($categorie_item->name)
                    ->setIsMega($categorie_item->isMega)
            ;
            $categories[] = $category;
            $manager->persist($category);
        }

        //2- PRODUCT
        $filename = $this->rootDir.'/src/DataFixtures/Data/products.json';
	    $data = file_get_contents($filename);

        $products_json = json_decode($data);
        $products = [];
        foreach ($products_json as $product_item) {
            
            foreach ($product_item->imageUrls as $imageUrl) {
                try {
                    $data = explode("/", $imageUrl);
                    $imageFilename = $data[count($data) - 1 ];
                    $result = copy(
                        $this->rootDir."/public/assets/images/products/".$imageUrl, 
                        $this->rootDir."/public/assets/images/products/".$imageFilename
                    );
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
            
            $product = new Product();
            $product->setName($product_item->name)
                    ->setDescription($product_item->description)
                    ->setMoreDescription($product_item->more_description)
                    ->setImageUrls($product_item->imageUrls)
                    ->setSoldePrice((rand(20,29) - 0.1)*100)
                    ->setRegularPrice((rand(50,200) - 0.1)*100)
                    ->setIsBestSeller($product_item->isBestSeller)
                    ->setIsNewArrival($product_item->isNewArrival)
                    ->setIsFeatured($product_item->isFeatured)
                    ->setIsSpecialOffer($product_item->isSpecialOffer)
                    ->setStock(rand(400,890))
            ;
            for ($i=0; $i < 5; $i++) {
                $product->addCategory($categories[rand(0,4)]);
            }
            $products[] = $product;
            $manager->persist($product);
        }

        //3- USER
        $filename = $this->rootDir.'/src/DataFixtures/Data/users.json';
	    $data = file_get_contents($filename);
        
        $users_json = json_decode($data);
        $users = [];
        foreach ($users_json as $user_item) {
            # code...
            
            $user = new User();
            $user->setFullName($user_item->fullName)
            ->setCivility($user_item->civility)
            ->setEmail($user_item->email)
            ;
            $password_hash = $this->userPasswordHasher->hashPassword($user, "123456");

            $user->setPassword($password_hash);

            $users[] = $user;
            $manager->persist($user);
        }

        // 3.1- Adsress
        $filename = $this->rootDir.'/src/DataFixtures/Data/addresses.json';
	    $data = file_get_contents($filename);
        
        $addresses_json = json_decode($data);
       
        foreach ($addresses_json as $addresse_item) {
            # code...
            
            $addresse = new Address();
            $addresse->setName($addresse_item->name)
                     ->setClientName($addresse_item->client_name)
                     ->setStreet($addresse_item->street)
                     ->setCodePostal($addresse_item->code_postal)
                     ->setCity($addresse_item->city)
                     ->setState($addresse_item->state)
                     ->setUser($users[rand(0, count($users)-1)])
            ;
            $manager->persist($addresse);
        }


        

        //4- SLIDERS
        $filename = $this->rootDir.'/src/DataFixtures/Data/sliders.json';
	    $data = file_get_contents($filename);

        $sliders_json = json_decode($data);
        $sliders = [];
        foreach ($sliders_json as $slider_item) {
            # code...
            
            $slider = new Sliders();
            $slider->setTitle($slider_item->title)
                ->setDescription($slider_item->description)
                ->setButtonText($slider_item->button_text)
                ->setButtonLink($slider_item->button_link)
                ->setImageUrl($slider_item->imageUrl)
            ;
            $manager->persist($slider);
        }
        //5- COLLECTIONS
        $filename = $this->rootDir.'/src/DataFixtures/Data/collections.json';
	    $data = file_get_contents($filename);

        $collections_json = json_decode($data);
        $collections = [];
        foreach ($collections_json as $collection_item) {
            # code...
            
            $collection = new Collection();
            $collection->setTitle($collection_item->title)
                ->setDescription($collection_item->description)
                ->setButtonText($collection_item->button_text)
                ->setButtonLink($collection_item->button_link)
                ->setImageUrl($collection_item->imageUrl)
                ->setIsMega($collection_item->isMega)
            ;
            $manager->persist($collection);
        }
        //6- PAGES
        $filename = $this->rootDir.'/src/DataFixtures/Data/pages.json';
	    $data = file_get_contents($filename);

        $pages_json = json_decode($data);
        $pages = [];
        foreach ($pages_json as $page_item) {
            # code...
            
            $page = new Page();
            $page->setTitle($page_item->title)
                    ->setContent($page_item->content)
                    ->setIsHead($page_item->isHead)
                    ->setIsFoot($page_item->isFoot)
            ;
            $manager->persist($page);
        }
        
        //6- SETTING
        $filename = $this->rootDir.'/src/DataFixtures/Data/setting.json';
	    $data = file_get_contents($filename);

        $settings_json = json_decode($data);
        $settings = [];
        foreach ($settings_json as $setting_item) {
            # code...
            
            $setting = new Setting();
            $setting->setWebsiteName($setting_item->website_name)
                    ->setDescription($setting_item->description)
                    ->setEmail($setting_item->email)
                    ->setPhone($setting_item->phone)
                    ->setLogo($setting_item->logo)
                    ->setCurrency($setting_item->currency)
                    ->setFacebookLink($setting_item->facebookLink)
                    ->setYoutubeLink($setting_item->youtubeLink)
                    ->setInstagramLink($setting_item->instagramLink)
                    ->setStreet($setting_item->street)
                    ->setCity($setting_item->city)
                    ->setCodePostal($setting_item->code_postal)
                    ->setState($setting_item->state)
                    ->setCopyRight($setting_item->copyright)
            ;
            $manager->persist($setting);
        }
        

        $manager->flush();
    }
}
