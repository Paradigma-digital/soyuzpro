<?php

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: info@soyuz.pro' . "\r\n";


$body = '

<!DOCTYPE html>
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en"
      xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8"> <!-- utf-8 works for most cases -->
  <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn\'t be necessary -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
  <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
  <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

  <!-- Web Font / @font-face : BEGIN -->
  <!-- NOTE: If web fonts are not required, lines 10 - 27 can be safely removed. -->

  <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
  <!--[if mso]>
  <style>
    * {
      font-family: sans-serif !important;
    }
  </style>
  <![endif]-->

  <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
  <!--[if !mso]><!-->
  <!-- insert web font reference, eg: <link href=\'https://fonts.googleapis.com/css?family=Roboto:400,700\' rel=\'stylesheet\' type=\'text/css\'> -->
  <!--<![endif]-->

  <!-- Web Font / @font-face : END -->

  <!-- CSS Reset : BEGIN -->
  <style>

    /* What it does: Stops email clients resizing small text. */
    * {
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%;
    }

    /* What it does: Centers email on Android 4.4 */
    div[style*="margin: 16px 0"] {
      margin: 0 !important;
    }

    /* What it does: Stops Outlook from adding extra spacing to tables. */
    table,
    td {
      mso-table-lspace: 0pt !important;
      mso-table-rspace: 0pt !important;
    }

    /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
    table {
      border-spacing: 0 !important;
      border-collapse: collapse !important;
      table-layout: fixed !important;
      margin: 0 auto !important;
    }

    table table {
      table-layout: auto !important;
    }

    /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
    a {
      text-decoration: none;
    }

    /* What it does: Uses a better rendering method when resizing images in IE. */
    img {
      -ms-interpolation-mode: bicubic;
    }

    /* What it does: A work-around for email clients meddling in triggered links. */
    *[x-apple-data-detectors], /* iOS */
    .unstyle-auto-detected-links *,
    .aBn {
      border-bottom: 0 !important;
      cursor: default !important;
      color: inherit !important;
      text-decoration: none !important;
      font-size: inherit !important;
      font-family: inherit !important;
      font-weight: inherit !important;
      line-height: inherit !important;
    }

    /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
    .a6S {
      display: none !important;
      opacity: 0.01 !important;
    }

    /* If the above doesn\'t work, add a .g-img class to any image in question. */
    img.g-img + div {
      display: none !important;
    }

    /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
    /* Create one of these media queries for each additional viewport size you\'d like to fix */

    .email-container {
      min-width: 600px;
    }

  </style>
  <!-- CSS Reset : END -->
  <!-- Reset list spacing because Outlook ignores much of our inline CSS. -->
  <!--[if mso]>
  <style type="text/css">
    ul,
    ol {
      margin: 0 !important;
    }

    li {
      margin-left: 30px !important;
    }

    li.list-item-first {
      margin-top: 0 !important;
    }

    li.list-item-last {
      margin-bottom: 10px !important;
    }
  </style>
  <![endif]-->

  <!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
  <!--[if gte mso 9]>
  <xml>
    <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
  </xml>
  <![endif]-->

</head>

<body width="100%"
      style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #fff;">
<center style="width: 100%; background-color: #fff;">

  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #fff;">
    <tr>
      <td style="padding: 0; font-weight: normal;">


  <!-- Email Body : BEGIN -->
  <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="600"
         style="margin: 0 auto;" class="email-container">
    <tr>
      <td valign="top" style="background-color: #f9fafe;">
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
          <tr>
            <td style="padding: 28px 15px 22px 15px;" valign="top">
              <a href="http://soyuz.pro" target="_blank"><img src="http://soyuz.pro/email-images/logo.jpg" alt="Союз" style="display: block;"></a>
            </td>
            <td style="padding: 28px 20px 20px 15px;" valign="top">
              <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="right">
                <tr>
                  <td style="font-family: \'Arial\', sans-serif; font-size: 26px; line-height: 26px; color:#2d2e39; font-weight: bold; padding: 0 0 3px 0;">
                    <a href="tel:8 800 234-99-00" style="color: #2d2e39; text-decoration: none;">8 800 234-99-00</a>
                  </td>
                </tr>
                <tr>
                  <td style="font-family: \'Arial\', sans-serif; font-size: 14px;line-height: 20px;font-weight: bold;">
                    <a href="mailto:info@soyuz.pro" style="color: #003493; text-decoration: none;">info@soyuz.pro</a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>

    </tr>

    <tr>

      <td valign="top" style="padding: 30px 0 30px 0;">

        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
          <tr>

            <td valign="top">

              <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">

                <tr>
                  <td valign="top" style="font-family: \'Arial\', sans-serif; font-size: 36px; line-height: 45px; color:#2d2e39; font-weight: bold; padding: 22px 20px 38px 20px;">
                    <p style="margin: 0;">Новая стойка с&nbsp;цельноформованным наконечником и&nbsp;фигурными фланцами</p>
                  </td>
                </tr>

                <tr>
                  <td valign="top" style="padding: 0 0 0 15px;">

                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                      <tr>

                        <td valign="top" style="width: 33.33%; padding: 0 5px 0 5px;">

                          <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                              <td valign="top" style="padding: 0 0 5px 0;">
                                <img src="http://soyuz.pro/email-images/num-1.jpg">
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" style="font-family: \'Arial\', sans-serif; font-size: 18px;line-height: 26px;font-weight: bold; color: #003493;">
                                <p style="margin: 0;">Дешевле на&nbsp;31%</p>
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" style="font-family: \'Arial\', sans-serif; font-size: 11px;line-height: 14px; color: #003493; padding: 3px 0 0 0;">
                                <p style="margin: 0;">дешевле от&nbsp;24&nbsp;до&nbsp;39%, в&nbsp;зависимости от&nbsp;длины стойки</p>
                              </td>
                            </tr>
                          </table>

                        </td>

                        <td valign="top" style="width: 33.33%; padding: 0 5px 0 5px;">

                          <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                              <td valign="top" style="padding: 0 0 5px 0;">
                                <img src="http://soyuz.pro/email-images/num-2.jpg">
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" style="font-family: \'Arial\', sans-serif; font-size: 18px;line-height: 26px;font-weight: bold; color: #003493;">
                                <p style="margin: 0;">Прочнее на&nbsp;21%</p>
                              </td>
                            </tr>
                          </table>

                        </td>

                        <td valign="top" style="width: 33.33%; padding: 0 5px 0 5px;">

                          <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                              <td valign="top" style="padding: 0 0 5px 0;">
                                <img src="http://soyuz.pro/email-images/num-3.jpg">
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" style="font-family: \'Arial\', sans-serif; font-size: 18px;line-height: 26px;font-weight: bold; color: #003493;">
                                <p style="margin: 0;">Легче на&nbsp;5%</p>
                              </td>
                            </tr>
                          </table>

                        </td>

                      </tr>
                    </table>

                  </td>
                </tr>

              </table>

            </td>

            <td valign="top" style="padding: 0 15px 0 0;">

              <img src="http://soyuz.pro/email-images/bar.jpg">

            </td>

          </tr>
        </table>

      </td>

    </tr>

    <tr>

      <td valign="top" style="padding: 3px 5px 46px 5px;">

        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
          <tr>

            <td valign="top" style="width: 50%; padding: 0 15px 42px 15px;">

              <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>

                  <td valign="top">
                    <img src="http://soyuz.pro/email-images/pic-1.jpg" style="width: 100%;">
                  </td>

                </tr>
                <tr>

                  <td valign="top" style="font-family: \'Arial\', sans-serif; font-size: 16px;line-height: 24px;font-weight: bold; padding: 20px 0 0 0; color: #2d2e39;">
                    <p style="margin:0;">Защищает стойку от&nbsp;произвольного перекатывания и&nbsp;как следствие возможного падения с&nbsp;высоты</p>
                  </td>

                </tr>

              </table>

            </td>

            <td valign="top" style="width: 50%; padding: 0 15px 42px 15px;">

              <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>

                  <td valign="top">
                    <img src="http://soyuz.pro/email-images/pic-2.jpg" style="width: 100%;">
                  </td>

                </tr>
                <tr>

                  <td valign="top" style="font-family: \'Arial\', sans-serif; font-size: 16px;line-height: 24px;font-weight: bold; padding: 20px 0 0 0; color: #2d2e39;">
                    <p style="margin:0;">Уменьшает объем складирования стоек на&nbsp;5% по&nbsp;сравнению с&nbsp;круглыми фланцами стоек</p>
                  </td>

                </tr>

              </table>

            </td>

          </tr>
          <tr>

            <td valign="top" style="padding: 0 15px 42px 15px;" colspan="2">

              <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>

                  <td valign="top">
                    <img src="http://soyuz.pro/email-images/pic-3.jpg" style="width: 100%;">
                  </td>

                </tr>
                <tr>

                  <td valign="top" style="font-family: \'Arial\', sans-serif; font-size: 16px;line-height: 24px;font-weight: bold; padding: 20px 0 0 0; color: #2d2e39;">
                    <p style="margin:0;">Отверстия во фланце имеют плавные формы радиусов закруглений, что снижает концентрацию напряжений и повышает надежность работы конструкции в целом</p>
                  </td>

                </tr>

              </table>

            </td>

          </tr>
          <tr>

            <td valign="top" style="width: 50%; padding: 0 15px 42px 15px;">

              <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>

                  <td valign="top">
                    <img src="http://soyuz.pro/email-images/pic-4.jpg" style="width: 100%;">
                  </td>

                </tr>
                <tr>

                  <td valign="top" style="font-family: \'Arial\', sans-serif; font-size: 16px;line-height: 24px;font-weight: bold; padding: 20px 0 0 0; color: #2d2e39;">
                    <p style="margin:0;">Увеличена общая полезная площадь стойки для установки хомутов</p>
                  </td>

                </tr>

              </table>

            </td>

            <td valign="top" style="width: 50%; padding: 0 15px 42px 15px;">

              <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr>

                  <td valign="top">
                    <img src="http://soyuz.pro/email-images/pic-5.jpg" style="width: 100%;">
                  </td>

                </tr>
                <tr>

                  <td valign="top" style="font-family: \'Arial\', sans-serif; font-size: 16px;line-height: 24px;font-weight: bold; padding: 20px 0 0 0; color: #2d2e39;">
                    <p style="margin:0;">Насечки на фланце позволяют контролировать точную установку ригелей под 90 градусов</p>
                  </td>

                </tr>

              </table>

            </td>

          </tr>

          <tr>

            <td valign="top" colspan="2" style="text-align: center;padding: 6px 10px 0 10px;">

              <a href="http://soyuz.pro" target="_blank"><img src="http://soyuz.pro/email-images/btn-order.jpg" alt="Сделать заказ"></a>

            </td>

          </tr>

        </table>

      </td>

    </tr>

    <tr>

      <td valign="top" style="border-top: 1px solid #f2f4f9; padding: 42px 20px 47px 20px;">

        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">

          <tr>

            <td valign="top" style="font-family: \'Arial\', sans-serif; font-size: 30px;line-height: 40px;font-weight: bold;color:#003493; padding: 0 0 11px 0;">

              <p style="margin: 0;">Спасибо за&nbsp;уделенное время!</p>

            </td>

          </tr>

          <tr>

            <td valign="top" style="font-family: \'Arial\', sans-serif; font-size: 15px;line-height: 24px;color:#2d2e39;">

              <p style="margin: 0;">Компания &laquo;СОЮЗ&raquo; ваш надежный партнер, для безопасного и&nbsp;эффективного решения задач в&nbsp;области профессиональных строительных лесов по&nbsp;всему миру.</p>

            </td>

          </tr>

        </table>

      </td>

    </tr>

    <tr>

      <td valign="top" style=";background: #f0f2fb; padding: 46px 20px 48px 20px;">

        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">

          <tr>

            <td valign="top">

              <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">

                <tr>

                  <td valign="top" style="font-family: \'Arial\', sans-serif;font-size: 12px;line-height: 18px;color:#9b9ca6;font-weight: normal; padding: 0 0 0 0;">
                    <p style="margin: 0;">Звонок бесплатный по&nbsp;РФ:</p>
                  </td>

                </tr>

                <tr>

                  <td valign="top" style="padding: 0 0 37px 0;">

                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="left">
                      <tr>

                        <td valign="top" style="font-family: \'Arial\', sans-serif; font-size: 40px;line-height: 40px;font-weight: bold;color:#2d2e39;padding: 6px 15px 0 0;">
                          <a href="tel:8 800 234-99-00" style="text-decoration: none;color:#2d2e39;">8 800 234-99-00</a>
                        </td>

                        

                      </tr>
                    </table>

                  </td>

                </tr>

              </table>

            </td>

          </tr>

          <tr>

            <td valign="top" style="padding: 0 0 37px 0;">

              <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">

                <tr>

                  <td valign="top" style="font-family: \'Arial\', sans-serif;font-size: 12px;line-height: 18px;color:#9b9ca6;font-weight: normal;padding: 0 0 3px 0;">
                    <p style="margin: 0;">Мы ждем вас по&nbsp;адресу:</p>
                  </td>

                </tr>

                <tr>

                  <td valign="top" style="font-family: \'Arial\', sans-serif;font-size: 18px;line-height: 26px;font-weight: bold;color:#2d2e39;">
                    <p style="margin: 0;">426039, г.&nbsp;Ижевск, Воткинское шоссе, 33А</p>
                  </td>

                </tr>

              </table>

            </td>

          </tr>

          <tr>

            <td valign="top">

              <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">

                <tr>

                  <td valign="top" style="width: 33.33%">

                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">

                      <tr>

                        <td valign="top" style="font-family: \'Arial\', sans-serif;font-size: 12px;line-height: 18px;color:#9b9ca6;font-weight: normal;padding: 0 0 3px 0;">
                          <p style="margin: 0;">Напишите нам на&nbsp;почту:</p>
                        </td>

                      </tr>

                      <tr>

                        <td valign="top" style="font-family: \'Arial\', sans-serif;font-size: 18px;line-height: 26px;font-weight: bold;color:#2d2e39;">
                          <p style="margin: 0;">
                            <a href="mailto:info@soyuz.pro" style="color: #003493; text-decoration: none;">info@soyuz.pro</a>
                          </p>
                        </td>

                      </tr>

                    </table>

                  </td>

                  <td valign="top" style="width: 33.33%">

                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">

                      <tr>

                        <td valign="top" style="font-family: \'Arial\', sans-serif;font-size: 12px;line-height: 18px;color:#9b9ca6;font-weight: normal;padding: 0 0 3px 0;">
                          <p style="margin: 0;">Посетите наш сайт:</p>
                        </td>

                      </tr>

                      <tr>

                        <td valign="top" style="font-family: \'Arial\', sans-serif;font-size: 18px;line-height: 26px;font-weight: bold;color:#2d2e39;">
                          <p style="margin: 0;">
                            <a href="http://soyuz.pro" target="_blank" style="color: #003493; text-decoration: none;">www.soyuz.pro</a>
                          </p>
                        </td>

                      </tr>

                    </table>

                  </td>

                  <td valign="top" style="width: 33.33%">

                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">

                      <tr>

                        <td valign="top" style="font-family: \'Arial\', sans-serif;font-size: 12px;line-height: 18px;color:#9b9ca6;font-weight: normal;padding: 0 0 3px 0;">
                          <p style="margin: 0;">Наши соц. сети:</p>
                        </td>

                      </tr>

                      <tr>

                        <td valign="top" style="padding: 3px 0 0 0">
                          <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="left">
                            <tr>
                              <td valign="top" style="padding: 0 15px 0 0;">
                                <a href="https://www.facebook.com/soyuzscaffolding/" target="_blank"><img src="http://soyuz.pro/email-images/ico-fb.png" alt="Facebook" width="20" height="20"></a>
                              </td>
                              <td valign="top" style="padding: 0 15px 0 0;">
                                <a href="https://www.instagram.com/soyuzscaffolding/" target="_blank"><img src="http://soyuz.pro/email-images/ico-instagram.png" alt="Instagram" width="20" height="20"></a>
                              </td>
                            </tr>
                          </table>
                        </td>

                      </tr>

                    </table>

                  </td>

                </tr>

              </table>

            </td>

          </tr>

        </table>

      </td>

    </tr>

    <tr>

      <td valign="top" style="background: #fff; padding: 50px 20px 50px 20px;">

        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">

          <tr>

            <td valign="top" style="width: 210px;">

              <img src="http://soyuz.pro/email-images/qr-code.png" style="display: block;">

            </td>

            <td valign="top" style="padding: 0 0 0 38px;">

              <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">

                <tr>

                  <td valign="top" style="padding: 18px 0 12px 0;">

                    <a href="http://soyuz.pro">
                      <img src="http://soyuz.pro/email-images/logo-footer.jpg" alt="Союз" style="display: block;">
                    </a>

                  </td>

                </tr>

                <tr>

                  <td valign="top" style="font-family: \'Arial\', sans-serif;font-size: 18px;line-height: 26px;font-weight: bold;color:#2d2e39;">
                    <p style="margin: 0;">Сокращаем срок монтажа в&nbsp;3&nbsp;раза и&nbsp;обеспечиваем максимальную безопасность работ на&nbsp;высоте!</p>
                  </td>

                </tr>

              </table>

            </td>

          </tr>

        </table>

      </td>

    </tr>

    <tr>

      <td valign="top" style="background: #fff; padding: 15px 20px 15px 20px; border-top: 1px solid #f2f4f9;">

        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">

          <tr>

            <td valign="top" style="font-family: \'Arial\', sans-serif; font-size: 12px;line-height: 20px;color:#9b9ca6;">
              <p style="margin:0;">&copy;&nbsp;Завод строительных лесов &laquo;Союз&raquo; 2019. Все права защищены.</p>
            </td>

            <td valign="top" style="font-family: \'Arial\', sans-serif; font-size: 12px;line-height: 20px;color:#9b9ca6;text-align: right;padding: 0 0 0 30px;">
              <p style="margin: 0;">
                <a href="#" style="color:#003493;text-decoration: none;">Отписаться от расссылки</a>
              </p>
            </td>

          </tr>

        </table>



      </td>

    </tr>


  </table>
  <!-- Email Body : END -->


  </td>
  </tr>
  </table>

</center>
</body>
</html>
';

// Отправка письма пользователю, если указан email
/*
if ($_POST['email']) {
  mail($_POST['email'], $_POST['subject'], $body, $headers);
}
*/
// Отправка письма администратору

mail('dmitriikazackii@gmail.com', 'Союз тест', $body, $headers);


?>
