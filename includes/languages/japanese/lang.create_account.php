<?php
$define = [
    'NAVBAR_TITLE' => 'アカウント作成',
    'HEADING_TITLE' => 'アカウント作成',
    'TEXT_ORIGIN_LOGIN' => '<strong class="note">注意:</strong>すでに当ショップでのアカウントをお持ちの場合は、<a href="%s">こちら</a>からログインしてください。',
    'ERROR_CREATE_ACCOUNT_SPAM_DETECTED' => 'ありがとうございます。あなたのアカウントリクエストは、報告させていただきました。',
    'EMAIL_SUBJECT' => STORE_NAME . 'へようこそ',
    'EMAIL_GREET_MR' => '%s 様' . "\n\n",
    'EMAIL_GREET_MS' => '%s 様' . "\n\n",
    'EMAIL_GREET_NONE' => '%s 様' . "\n\n",
    'EMAIL_WELCOME' => '謹啓　この度は<strong>' . STORE_NAME . 'にご登録いただきありがとうございました。</strong>',
    'EMAIL_SEPARATOR' => '--------------------',
    'EMAIL_COUPON_INCENTIVE_HEADER' => 'ご登録いただいたお礼に次回<strong>' . STORE_NAME . '</strong>をご利用の際にお使い' . "\n" .'いただける「割引クーポン」をお送りします!' . "\n\n",
    'EMAIL_COUPON_REDEEM' => 'クーポンコード： <strong>%s</strong>' . "\n\n" . 'この割引クーポンをお使いになるには、お買い物' . "\n" . 'の精算時に上記コードを入力してください。' . "\n\n",
    'EMAIL_GV_INCENTIVE_HEADER' => '本日に限り %sの' . TEXT_GV_NAME . 'をお送りします!' . "\n",
    'EMAIL_GV_REDEEM' => 'The ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' は: %s ' . "\n\n" . 'お客様が当ショップで商品をお選びになった後、精算時に「' . TEXT_GV_REDEEM . 'を入力していただくことでお使いいただけます。',
    'EMAIL_GV_LINK' => '下記のリンクから今すぐ引き換えることもできます。: ' . "\n",
    'EMAIL_GV_LINK_OTHER' => 'お客様ご自身のアカウントに' . TEXT_GV_NAME . 'を追加しておけば、ご自分で' . TEXT_GV_NAME . 'をお使いいただけます。またお知り合いの方にプレゼントすることもできます。' . "\n\n",
    'EMAIL_TEXT' => 
 '当ショップにご登録いただいたアカウントで、お客様はこれから以下の<strong>便利な' . "\n" . 
 'サービス</strong>をご利用いただけます。' . "\n" . 
 "\n" . 
 '・<strong>ショッピングカート</strong>' . "\n" . 
 'ショッピングカートに入れた商品は、削除または精算するまで' . "\n" . 
 '保持しておくことができます。' . "\n" . 
 "\n" . 
 '・<strong>アドレス帳</strong>' . "\n" . 
 ' 贈り物などの際に便利なように、ご自宅の他にもお届け先を5件まで' . "\n" . 
 '登録することができます。' . "\n" . 
 "\n" . 
 '・<strong>注文履歴</strong>' . "\n" . 
 'マイページから、当店でご注文いただいた商品の一覧' . "\n" . 
 'を確認することができます。' . "\n" .  
 "\n" . 
 '・<strong>商品のレビュー</strong>' . "\n" . 
 '当ショップの商品についてのレビュー(感想)を書き込んでいただくことができます。' . "\n" . 
 '是非他のお客様に感想をお伝えください。' . "\n\n",
    'EMAIL_CONTACT' => '当ショップのオンラインサービスで何かご不明な点がございましたら、Eメールにてお気軽にお問い合わせ下さい: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n",
    'EMAIL_GV_CLOSURE' => '謹白' . "\n\n店長 " . STORE_OWNER . "\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n",
    'EMAIL_DISCLAIMER_NEW_CUSTOMER' => 'このメールアドレスは、お客様ご自身によって当ショップに登録されました。もしアカウント登録をされた覚えがない場合には、お手数ですが %s までご連絡ください。',
];

return $define;
