
<?php
$articles = [
    [
        "title" => "How to Train Your Dog",
        "content" => "Teach basic commands:  sit, stay, come, down, fetch, and walk.
         This lays the groundwork for good behaviour and training "
    ],
    [
        "title" => "Best Diet for Dogs",
        "content" => "Make to maintain a proper eating pattern for your dog.
        Always give your dog a balanced diet of high quality foods.
        Provide fresh water always. Avoiding sugary and salty foods"
    ],
    [
        "title" => "Dog Grooming",
        "content" => "NAIL TRIMMING to keep paws healthy. EAR CLEANING to keep ears clean.
        TEETH CLEANING for dental care and make sure to brush your dogs fur in the direction of growth depending on the breed"
    ],
    [
        "title" => "Common Dog Health Issues",
        "content" => " 3 common issues are :  DIABETES - always thirsty , urinating and weight loss.
        HEART DISEASE - coughing, difficulty in breathing and fainting.
        OBESITY -  Visible weight gain, difficulty moving and fatigue "
    ],
    [
      "title" => "Understanding Your Dog’s Behavior",
        "content" => "Signs of knowing your dogs behavior: TAIL WAGGING - excitement or happiness.
       LICKING - affection, playfulness, or excitement. BARKING - happiness, attention, seeing something unfamiliar or 
       stressed"
    ]
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/ProductDescStyle.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Pawsible - Pet Care Guide</title>
</head>
<body>
    
<?php include('Templates/header.php'); ?>
    <div class="container">
     <div class="index-headings">   <h2>Welcome to the Pet Care Guide</h2> </div>
        <div class="articles-container">
            <?php foreach ($articles as $article): ?>
                <div class="article-box">
                <h3 class="article-title"><?= htmlspecialchars($article['title']); ?></h3>
                <p class="article-content"><?= htmlspecialchars($article['content']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include('Templates/footer.php'); ?>

</body>
</html>
