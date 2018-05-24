<!DOCUMENT html>
<?php include 'feed.php'; ?>
<head>
    <script>
        var feed = "<?php echo json_encode(getFeed("http://feeds.dzone.com/webdev")); ?>";
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php $feeds = []; ?>
<?php $feeds[] = getFeed("http://feeds.dzone.com/webdev"); ?>
<?php $feeds[] = getFeed("http://feeds.feedburner.com/TheHackersNews"); ?>
<?php $feeds[] = getFeed("http://feeds.tv2.dk/nyhederne_seneste/rss"); ?>

<div id="app">
    <?php foreach($feeds as $rfeed): ?>
        <?php foreach($rfeed->channel as $feed): ?>
            <h2 class="feed-name"><?php echo $feed->title; ?></h2>
            <?php foreach($feed->item as $item): ?>
                <article class="post" data-link="<?php echo $item->link; ?>">
                    <h2><?php echo $item->title; ?></h2>
                    <div class="content">
                        <p><?php echo strip_tags($item->description); ?></p>
                        <div class="tags">
                            <?php foreach($item->category as $cat): ?>
                                <p class="tag"><?php echo $cat; ?></p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        <?php endforeach; ?>
    <?php endforeach; ?>
</div>

</body>

<html>