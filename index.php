

<!-- // HW2: what is the difference between them?
  // include
  // include_once
  // require
  // require_once -->
<?
//   include 'data.php';

// DATA
const NEW_STICKER = 'data:image/png;base64,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';
const DEFAULT_IMAGE = 'https://lgshoplocal.com/wp-content/uploads/2020/04/placeholderproduct-500x500-1.png';

$products = [
     [
         'name'     => 'Test Product 1',
         'image'    => DEFAULT_IMAGE,
         'category' => 'Category A',
         'new' => false,
 
         'price'    => [
             'amount'   => 100,
             'currency' => 'USD',
             
         ]
      ],
      [
         'name'     => 'Test Product 2',
         'image'    => 'https://lgshoplocal.com/wp-content/uploads/2020/04/placeholderproduct-500x500-1.png',
         'category' => 'Category A',
         'new' => true,
 
         'price'    => [
             'amount'   => 300,
             'currency' => 'USD',
             
         ]
      ],
 
      [
         'name'     => 'Test Product 3',
         'image'    => DEFAULT_IMAGE,
         'category' => 'Category A',
         'new' => false,
 
         'price'    => [
             'amount'   => 200,
             'currency' => 'USD',
             
         ]
      ],
 
      [
         'name'     => 'Test Product 4',
         'image'    => DEFAULT_IMAGE,
         'category' => 'Category A',
         'new' => false,
 
         'price'    => [
             'amount'   => 500,
             'currency' => 'USD',
             
         ]
      ],
 
      [
         'name'     => 'Test Product 5',
         'image'    => DEFAULT_IMAGE,
         'category' => 'Category C',
         'new' => false,
 
         'price'    => [
             'amount'   => 600,
             'currency' => 'USD',
             
         ]
      ],
 
      [
         'name'     => 'Test Product 6',
         'image'    => DEFAULT_IMAGE,
         'category' => 'Category C',
         'new' => false,
 
         'price'    => [
             'amount'   => 400,
             'currency' => 'USD',
             
         ]
      ],
             
         ];


?>


    <!-- // indexed array

    // $products = [
    //     "Test Product 1",  // 0
    //     "images/1.jpg",    // 1
    //     "Category A",      // 2
    //     "100$",
    // ];
//-------------------------------->
    <!-- // asociati array -->
<?
        if(isset($_GET['p'])) {
            $page = $_GET['p'];
        }else {
            $page = 1;
        }
            $prev_page = $page - 1;
            $next_page = $page + 1;    
            
            if($next_page > 2 ) {
                $next_page = 2;
                
            }
        
            if($prev_page < 1 ) {
             $prev_page = 1;
            }
        $totalPages = 100;
?>
<!-- count($products) -->
<!-- CICLU ( e cu mult mai bine prin FOR de lucrat ) -->

<style>
    body{
        background-color:#333;
        text-align:center;
    }
    a{text-decoration:none;
        color:#fff;
        text-align:center;
    }

    span a:nth-child(<?=$page ?>) {
        text-decoration:underline;
    } 

    h2{
        color:#ddd;
    }
    h3{
        color:#aaa;
    }
    li{
        color:white;
    }
    div{
        margin-top:30px;
        color:white;
    }
    img{
        background-color:red;
    }
</style>


<!-- TEMPLATE -->
<ol>
    <? 
    // First HW done!
    if( $page == 1)
    for($i = 0; $i < 3; $i++) { ?>
        
<li>
<h2>
    <?= $products[$i]['name'] ?>
    <? if($products[$i]['new']) { ?> <img src="<?=NEW_STICKER ?>" width="50"/><? }?>
</h2>

    <h3><?= $products      [$i]['category'] ?></h3>
    <img src="<?= $products[$i]['image'] ?>" width="200"/>
    <div><?= $products     [$i]['price']['amount'] ?><?= $products[$i]['price']['currency'] ?></div>
    <hr>
</li>


<? }?>
<!-- --------------------------PAGE 2-------------- -->
 <? if( $page == 2 )  
     for($i = 3; $i < 6; $i++) { ?>
        
        <li>
            <h2><?= $products      [$i]['name'] ?></h2>
            <h3><?= $products      [$i]['category'] ?></h3>
            <img src="<?= $products[$i]['image'] ?>" width="200"/>
            <div><?= $products     [$i]['price']['amount'] ?><?= $products[$i]['price']['currency'] ?></div>
            <hr>
        </li>

      <? }?> 

      
</ol>
    
<!-- ------------------BUTTON'S---------------->

<div>
    You are on page <?=$page ?>
</div>

<a href="?p=<?=$prev_page ?>">&lt;</a>

<span>
    <a href="?p=1">1</a>
    <a href="?p=2">2</a>
</span>

<a href="?p=<?=$next_page ?>">&gt;</a>


