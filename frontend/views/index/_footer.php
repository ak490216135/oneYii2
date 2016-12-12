<?php
use yii\helpers\Html;
?>
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <ul class="legals">
                  <?php foreach ($ALL_PAGE as $value) {?>
                    <li><a href="/index.php/index/page?catdir=<?= HTML::encode($value->catdir)?>"><?= HTML::encode($value->title)?></a></li>
                  <?}?>
                </ul>
              </div>
              <div class="col-md-6 credit">
                <p> <a href="#" target="_blank" title="<?= Html::encode($SEO->title) ?>"><?= Html::encode($SEO->email) ?></a> </p>
              </div>
            </div>
          </div>
        </footer>