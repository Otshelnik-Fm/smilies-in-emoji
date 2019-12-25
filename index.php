<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/*

  ╔═╗╔╦╗╔═╗╔╦╗
  ║ ║ ║ ╠╣ ║║║ https://otshelnik-fm.ru
  ╚═╝ ╩ ╚  ╩ ╩

 */

// great packer http://refresh-sf.com/

add_action( 'rcl_enqueue_scripts', 'siem_style', 10 );
function siem_style() {
    rcl_enqueue_style( 'siem_style', rcl_addon_url( 'assets/css/siem-style-min.css', __FILE__ ) );
}

add_action( 'init', 'siem_global_emoji', 10 );
function siem_global_emoji() {
    global $wpsmiliestrans;

    $wpsmiliestrans = Array(); // обнулим вп-шный массив смайлов
    /**/

    // новые http://www.unicode.org/emoji/charts/full-emoji-list.html
    // https://emojipedia.org/twitter/
    // дубли нам нужны
    $smilies[':-)']       = "&#x1f642;";     // улыбка
    $smilies[':)']        = "&#x1f642;";     // улыбка дубль.
    $smilies[';-)']       = "&#x1f609;";     // подмигивает
    $smilies[';)']        = "&#x1f609;";     // подмигивает дубль.
    $smilies[':-D']       = "&#x1f600;";     // лыбится во все зубы
    $smilies[':D']        = "&#x1f600;";     // лыбится во все зубы дубль.
    $smilies['&#x1f601;'] = "&#x1f601;";     // смех во все зубы
    $smilies['&#x1f603;'] = "&#x1f603;";     // да ну
    $smilies['&#x1f604;'] = "&#x1f604;";     // ржака
    $smilies['&#x1f605;'] = "&#x1f605;";     // слезы
    $smilies['&#x1f606;'] = "&#x1f606;";     // ржака
    $smilies['&#x1f602;'] = "&#x1f602;";     // слезы
    $smilies['&#x1f60b;'] = "&#x1f60b;";     // улыбка и язык
    $smilies[':-P']       = "&#x1f61b;";     // показывает язык
    $smilies[':P']        = "&#x1f61b;";     // показывает язык дубль.
    $smilies['&#x1f61c;'] = "&#x1f61c;";     // язык
    $smilies['&#x1f61d;'] = "&#x1f61d;";     // язык с подмигиванием
    $smilies['&#x1f60a;'] = "&#x1f60a;";     // смущен
    $smilies['&#x1f618;'] = "&#x1f618;";     // поцелуй
    $smilies['&#x1f60d;'] = "&#x1f60d;";     // сердце в глазах
    $smilies['&#x1f970;'] = "&#x1f970;";     // в сердцах
    $smilies['&#x1f929;'] = "&#x1f929;";     // звезды в глазах
    $smilies['&#x1f973;'] = "&#x1f973;";     // день рождения
    $smilies['8-)']       = "&#x1f60e;";     // крутой чел в очках
    $smilies['&#x1f920;'] = "&#x1f920;";     // ковбой
    $smilies[':|']        = "&#x1f610;";     // безразличие
    $smilies[':-|']       = "&#x1f610;";     // безразличие дубль.
    $smilies['&#x1f61f;'] = "&#x1f61f;";     // взволнован
    $smilies[':-?']       = "&#x1f615;";     // конфузия
    $smilies[':-(']       = "&#x1f641;";     // грусть
    $smilies[':(']        = "&#x1f641;";     // грусть дубль.
    $smilies['8O']        = "&#x1f62f;";     // удивлен
    $smilies['8-O']       = "&#x1f62f;";     // удивлен дубль.
    $smilies['&#x1f62e;'] = "&#x1f62e;";
    $smilies['&#x1f635;'] = "&#x1f635;";
    $smilies[':-o']       = "&#x1f616;";     // еще как удивлен
    $smilies[':o']        = "&#x1f616;";     // еще как удивлен дубль.
    $smilies['&#x1f620;'] = "&#x1f620;";     // злой
    $smilies[':x']        = "&#x1f621;";     // красный злой
    $smilies[':-x']       = "&#x1f621;";     // красный злой дубль.
    $smilies['&#x1f92c;'] = "&#x1f92c;";     // красный злой цензура
    $smilies['&#x1f608;'] = "&#x1f608;";     // демон
    $smilies['&#x1f92e;'] = "&#x1f92e;";     // блёв
    $smilies['&#x1f62d;'] = "&#x1f62d;";     // плачет
    $smilies['&#x1f628;'] = "&#x1f628;";     // больной
    $smilies['&#x1f637;'] = "&#x1f637;";     // в маске
    $smilies['&#x1f912;'] = "&#x1f912;";     // с градусником
    $smilies['&#x1f910;'] = "&#x1f910;";     // рот на замке
    $smilies['&#x1f92b;'] = "&#x1f92b;";     // тс...
    $smilies['&#x1f914;'] = "&#x1f914;";     // поразмыслим

    $smilies['&#x1f97a;'] = "&#x1f97a;";     // умоляющий
    $smilies['&#x1f607;'] = "&#x1f607;";     // ангелочек
    $smilies['&#x1f62c;'] = "&#x1f62c;";     // гримасничает
    $smilies['&#x1f634;'] = "&#x1f634;";     // спит

    $smilies['&#x1f4a9;'] = "&#x1f4a9;";     // какашка
    /* faces end */

    // празд
    $smilies['&#x1f383;']        = "&#x1f383;";          // хеллоуин
    $smilies['&#x1f921;']        = "&#x1f921;";          // клоун
    $smilies['&#x1f9d9;']        = "&#x1f9d9;";          // волшебник
    $smilies['&#x1f9da;']        = "&#x1f9da;";          // фея
    $smilies['&#x1F9DF;']        = "&#x1F9DF;";          // зомби
    $smilies['&#x1f332;']        = "&#x1f332;";          // елка
    $smilies['&#x1f384;']        = "&#x1f384;";          // наряженная елка
    $smilies['&#x2744;']         = "&#x2744;";           // снежинка
    $smilies['&#x2603;&#xfe0f;'] = "&#x2603;&#xfe0f;";   // снеговик
    $smilies['&#x1f385;']        = "&#x1f385;";          // санта
    /**/

    // transport
    $smilies['&#x1f697;'] = "&#x1f697;";     // машина
    $smilies['&#x1f69c;'] = "&#x1f69c;";     // трактор
    $smilies['&#x1f682;'] = "&#x1f682;";     // поезд
    $smilies['&#x1f681;'] = "&#x1f681;";     // вертолет
    $smilies['&#x2708;']  = "&#x2708;";      // самолет
    $smilies['&#x1f680;'] = "&#x1f680;";     // ракета
    // drink
    $smilies['&#x1f37a;'] = "&#x1f37a;";     // пиво
    $smilies['&#x1f37b;'] = "&#x1f37b;";     // два пива
    $smilies['&#x1f377;'] = "&#x1f377;";     // вино
    $smilies['&#x1f942;'] = "&#x1f942;";     // две с вином
    $smilies['&#x1f379;'] = "&#x1f379;";     // текила
    $smilies['&#x1f378;'] = "&#x1f378;";     // коктейль
    $smilies['&#x2615;']  = "&#x2615;";      // кофе
    // food
    $smilies['&#x1f344;'] = "&#x1f344;";     // гриб
    $smilies['&#x1f34c;'] = "&#x1f34c;";     // банан
    $smilies['&#x1f352;'] = "&#x1f352;";     // вишенки
    $smilies['&#x1f353;'] = "&#x1f353;";     // клубнички
    $smilies['&#x1f355;'] = "&#x1f355;";     // пицца
    $smilies['&#x1F9C0;'] = "&#x1F9C0;";     // сыр
    // emotions
    $smilies['&#x1f48b;'] = "&#x1f48b;";     // губы
    $smilies['&#x2764;']  = "&#x2764;";      // сердце
    $smilies['&#x1f498;'] = "&#x1f498;";     // стрела в сердце
    $smilies['&#x1f495;'] = "&#x1f495;";     // 2 сердца
    $smilies['&#x1f48c;'] = "&#x1f48c;";     // сердце письмо
    $smilies['&#x1f494;'] = "&#x1f494;";     // разбито
    $smilies['&#x270c;']  = "&#x270c;";      // victory
    $smilies['&#x1f44d;'] = "&#x1f44d;";      // палец вверх
    $smilies['&#x1f44e;'] = "&#x1f44e;";      // палец вниз
    $smilies['&#x1f91d;'] = "&#x1f91d;";      // по рукам
    // symbols
    $smilies['&#x2795;']  = "&#x2795;";      // плюс
    $smilies['&#x2714;']  = "&#x2714;";      // чекаут
    $smilies['&#x2716;']  = "&#x2716;";      // закрыть
    $smilies['&#x2753;']  = "&#x2753;";      //
    $smilies['&#x2757;']  = "&#x2757;";      // восклиц знак
    $smilies['&#x26a0;']  = "&#x26a0;";      // внимание
    $smilies['&#x26a1;']  = "&#x26a1;";      // молния
    $smilies['&#x1f4cc;'] = "&#x1f4cc;";     // закрепить
    $smilies['&#x1f6ab;'] = "&#x1f6ab;";     // стоп
    $smilies['&#x1F5D1;'] = "&#x1F5D1;";     // корзина
    $smilies['&#x1F50e;'] = "&#x1F50e;";     // поиск - лупа
    $smilies['&#x1f4a1;'] = "&#x1f4a1;";     // идея
    $smilies['&#x1f4a3;'] = "&#x1f4a3;";     // бомба
    $smilies['&#x1f4a5;'] = "&#x1f4a5;";     // взрыв
    $smilies['&#x1F389;'] = "&#x1F389;";     // хлопушка
    $smilies['&#x1f381;'] = "&#x1f381;";     // подарок
    $smilies['&#x1F382;'] = "&#x1F382;";     // торт
    $smilies['&#x1f4b0;'] = "&#x1f4b0;";     // мешок денег
    $smilies['&#x1f4b5;'] = "&#x1f4b5;";     // наличные
    $smilies['&#x1f4b2;'] = "&#x1f4b2;";     // бакс
    $smilies['&#x270f;']  = "&#x270f;";      // ручка
    $smilies['&#x1f4dd;'] = "&#x1f4dd;";     // блокнот
    $smilies['&#x1F517;'] = "&#x1F517;";     // ссылка
    $smilies['&#x1f528;'] = "&#x1f528;";     // молоток
    $smilies['&#x1f527;'] = "&#x1f527;";     // гаечный ключ
    $smilies['&#x2699;']  = "&#x2699;";      // настройки
    $smilies['&#x1f552;'] = "&#x1f552;";     // время
    $smilies['&#x1f4a4;'] = "&#x1f4a4;";     // спать
    /**/

    $smilies['&#x1f1f7;&#x1f1fa;'] = "&#x1f1f7;&#x1f1fa;";   // ru flag
    $smilies['&#x1F1FA;&#x1F1F8;'] = "&#x1F1FA;&#x1F1F8;";   // usa flag
    $smilies['&#x2709;']           = "&#x2709;";             // конверт
    $smilies['&#x1f3c6;']          = "&#x1f3c6;";            // кубок
    $smilies['&#x1F396;']          = "&#x1F396;";            // медаль
    /**/

    // animals
    $smilies['&#x1f425;'] = "&#x1f425;";     // цыпленок
    $smilies['&#x1f41f;'] = "&#x1f41f;";     // рыба
    $smilies['&#x1f437;'] = "&#x1f437;";     // свин
    $smilies['&#x1f41e;'] = "&#x1f41e;";     // bug
    $smilies['&#x1f577;'] = "&#x1f577;";     // паук
    $smilies['&#x1f47d;'] = "&#x1f47d;";     // инопланетянин
    $smilies['&#x1f480;'] = "&#x1f480;";     // череп
    $smilies['&#x1f47b;'] = "&#x1f47b;";     // призрак

    $smilies['&#x2601;']          = "&#x2601;";             // туча
    $smilies['&#x1f327;&#xfe0f;'] = "&#x1f327;&#xfe0f;";    // дождь
    $smilies['&#x26c5;']          = "&#x26c5;";             // солнце из туч
    $smilies['&#x2600;']          = "&#x2600;";             // солнце
    $smilies['&#x1f334;']         = "&#x1f334;";            // пальма
    $smilies['&#x1f33c;']         = "&#x1f33c;";            // цветок
    $smilies['&#x1f490;']         = "&#x1f490;";            // букет
    $smilies['&#x1f341;']         = "&#x1f341;";            // кленовый лист
    $smilies['&#x1f342;']         = "&#x1f342;";            // листопад

    $smilies['&#x26fa;']  = "&#x26fa;";     // кемпинг палатка
    $smilies['&#x23f0;']  = "&#x23f0;";     // часы
    $smilies['&#x26bd;']  = "&#x26bd;";     // мяч
    $smilies['&#x2b50;']  = "&#x2b50;";     // звезда
    $smilies['&#x1f4af;'] = "&#x1f4af;";    // 100%
    $smilies['&#x1f5e8;'] = "&#x1f5e8;";    // комментарий

    $wpsmiliestrans = apply_filters( 'siem_emoji', $smilies );

    return $wpsmiliestrans;
}

// смайлы к форме комментариев
// хуки от верхней части до подвала формы комментирования
//
// comment_form_before
// comment_form_top
// comment_form_logged_in_after
// comment_form
// comment_form_after
add_action( 'comment_form_logged_in_after', 'siem_comment_smiles', 30 );
function siem_comment_smiles() {
    if ( ! function_exists( 'rcl_get_smiles' ) )
        return;

    // только залогиненному
    if ( is_user_logged_in() ) {
        echo $smiles = rcl_get_smiles( 'comment' );
    }
}

// небольшой релоад парсера
add_action( 'wp_footer', 'siem_footer_script' );
function siem_footer_script() {
    if ( ! is_user_logged_in() )
        return;

    $out = "
rcl_add_action('rcl_get_smiles_ajax','siem_reload');
function siem_reload(){
    var sm = document.getElementsByClassName('smiles')[0];
    if(typeof sm !== 'undefined'){
        twemoji.parse(sm);
    }
}
";

    echo "<script>" . siem_compress_js( $out ) . "</script>\r\n";
}

// минимизация скрипта
function siem_compress_js( $js ) {
    return preg_replace( '/ {2,}/', '', str_replace( array( "\r\n", "\r", "\n", "\t" ), '', $js ) );
}
