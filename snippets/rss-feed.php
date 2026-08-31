<?= '<?xml version="1.0" encoding="utf-8"?>'; ?><rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:wfw="http://wellformedweb.org/CommentAPI/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:atom="http://www.w3.org/2005/Atom">
  <channel>
    <title><?= Xml::encode($title) ?></title>
    <link><?= site()->url() ?></link>
    <atom:link href="<?= site()->url() ?>/feed.xml" rel="self" type="application/rss+xml" />
    <language>en-GB</language>
    <lastBuildDate><?= $posts->first()->date()->toDate('r') ?></lastBuildDate>
    <description><?= Xml::encode($description) ?></description>
    <image>
        <url><?= site()->url() ?>/favicon-32x32.png</url>
        <title><?= $title ?></title>
        <link><?= site()->url() ?></link>
    </image>

    <?php foreach ($posts as $item): ?>
    <item>
      <title><?= Xml::encode($item->title()) ?></title>
      <link><?= Xml::encode($item->url()) ?></link>
      <guid isPermaLink="false"><?= Xml::encode($item->id()) ?></guid>
      <pubDate><?= $item->date()->toDate('r') ?></pubDate>
      <description>

        <![CDATA[ <?= $item->text_content()->kt() ?> ]]>

        <?php if (site()->replyUrl()->isNotEmpty()): ?>
        <![CDATA[
          <br><hr><br>
          <p>Thanks for reading this post via RSS! If you have any feedback or comments, you can reach me <a href="<?= site()->replyUrl() ?>">here</a>.</p>
        ]]>
        <?php endif ?>

      </description>
    </item>
    <?php endforeach; ?>
  </channel>
</rss>