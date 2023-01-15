<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" href="./css/main.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>アンケート入力</title>
</head>
<body>
    <h1>📚小説に関するアンケート📚</h1>
    <h2>プログラミング課題「アンケートフォーム作成」にご協力をお願いします🙇🙇‍♀️</h2>
<div class="mainContents">
    <div class="contents">
    <form method="post" action="write.php">
        <p>あなたの性別を教えてください！：
        <select name="gender">
            <option value="男性">男性</option>
            <option value="女性">女性</option>
            <option value="未回答">未回答</option>
        </select></p>

        <p>最初に働き始めて何年目かを教えてください！：
        <select name="old">
            <option value="1~5年目">1~5年目</option>
            <option value="6~10年目">6~10年目</option>
            <option value="11~15年目">11~15年目</option>
            <option value="16~20年目">16~20年目</option>
            <option value="21~25年目">21~25年目</option>
            <option value="26~30年目">26~30年目</option>
            <option value="31年目~">31年目~</option>
      </select></p>

      <p>一番最後に小説を読んだのはいつですか？：
        <select name="last">
            <option value="3日以内">3日以内</option>
            <option value="1週間以内">1週間以内</option>
            <option value="2週間以内">2週間以内</option>
            <option value="1ヶ月以内">1ヶ月以内</option>
            <option value="3ヶ月以内">3ヶ月以内</option>
            <option value="3ヶ月より前">3ヶ月より前</option>
            <option value="いつ最後に読んだか覚えていない">いつ最後に読んだか覚えていない</option>
      </select></p>

      <p>「読みたい！」と思う小説にどうやって出会うことが多いですか？：
        <select name="how">
            <option value="本屋で面白そうな本を見つけた時">本屋で面白そうな本を見つけた時</option>
            <option value="インターネットで面白そうな本を見つけた時">インターネットで面白そうな本を見つけた時</option>
            <option value="SNSで面白そうな本を見つけた時">SNSで面白そうな本を見つけた時</option>
            <option value="誰かのオススメを聞いた時">誰かのオススメを聞いた時</option>
            <option value="好きな作家の本が出た時">好きな作家の本が出た時</option>
            <option value="その他">その他</option>
            <option value="読みたいと思わない">読みたいと思わない</option>
      </select></p>

      <p>あなたのお気に入りの1冊を教えてください！：<input type="text" name="favorite" size="20" placeholder="「特になし」も可"></p>

      <p>お気に入りの1冊はどんな本ですか？：
      <select name="type">
        <option value="読むと気分が晴れる本">読むと気分が晴れる本</option>
        <option value="何かに気付かせてくれる本">何かに気付かせてくれる本</option>
        <option value="しんみりとした気持ちになる本">しんみりとした気持ちになる本</option>
        <option value="知識・教養を与えてくれる本">知識・教養を与えてくれる本</option>
        <option value="読後の余韻に浸れる本">読後の余韻に浸れる本</option>
        <option value="その他">その他</option>
      </select></p>
      </div>
        <p><input id="submit" type="submit" value="📕送信する📙  "></p>
    </form>
</div>

</body>
</html>
