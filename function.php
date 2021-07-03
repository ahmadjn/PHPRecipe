<?php
use duncan3dc\Laravel\BladeInstance;
use bjoernffm\Spintax\Parser;

require 'vendor/autoload.php';
require 'constant.php';

function view($template, $data = [], $echo = true)
{
	$theme 			= THEME_NAME;
	$data['layout'] = "theme.{$theme}.layout";

	if ($template !== 'pages.page') {
		$template 	= "theme.{$theme}.{$template}";
	}


	$blade = new BladeInstance(__DIR__ . '/views', __DIR__ . '/cachetheme');
	$blade->addPath(__DIR__ . '/ads');

	if (!$echo) {
		return $blade->render($template, $data);
	}

	$res = $blade->render($template, $data);

	echo $res;
}

function export($template, $data = [], $echo = true)
{
	$blade = new BladeInstance(__DIR__ . '/views', __DIR__ . '/cache');
	$res = $blade->render($template, $data);
	return $res;
}

function clean($str, $options = array())
{
    // Make sure string is in UTF-8 and strip invalid UTF-8 characters
    $str = mb_convert_encoding((string) $str, 'UTF-8', mb_list_encodings());

    $defaults = array(
        'delimiter' => ' ',
        'limit' => null,
        'lowercase' => false,
        'replacements' => array(),
        'transliterate' => false,
    );

    // Merge options
    $options = array_merge($defaults, $options);

    $char_map = array(
        // Latin
        'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'AE', 'Ç' => 'C',
        'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I',
        'Ð' => 'D', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ő' => 'O',
        'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ű' => 'U', 'Ý' => 'Y', 'Þ' => 'TH',
        'ß' => 'ss',
        'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'ae', 'ç' => 'c',
        'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
        'ð' => 'd', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ő' => 'o',
        'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ű' => 'u', 'ý' => 'y', 'þ' => 'th',
        'ÿ' => 'y',
        // Latin symbols
        '©' => '(c)',
        // Greek
        'Α' => 'A', 'Β' => 'B', 'Γ' => 'G', 'Δ' => 'D', 'Ε' => 'E', 'Ζ' => 'Z', 'Η' => 'H', 'Θ' => '8',
        'Ι' => 'I', 'Κ' => 'K', 'Λ' => 'L', 'Μ' => 'M', 'Ν' => 'N', 'Ξ' => '3', 'Ο' => 'O', 'Π' => 'P',
        'Ρ' => 'R', 'Σ' => 'S', 'Τ' => 'T', 'Υ' => 'Y', 'Φ' => 'F', 'Χ' => 'X', 'Ψ' => 'PS', 'Ω' => 'W',
        'Ά' => 'A', 'Έ' => 'E', 'Ί' => 'I', 'Ό' => 'O', 'Ύ' => 'Y', 'Ή' => 'H', 'Ώ' => 'W', 'Ϊ' => 'I',
        'Ϋ' => 'Y',
        'α' => 'a', 'β' => 'b', 'γ' => 'g', 'δ' => 'd', 'ε' => 'e', 'ζ' => 'z', 'η' => 'h', 'θ' => '8',
        'ι' => 'i', 'κ' => 'k', 'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => '3', 'ο' => 'o', 'π' => 'p',
        'ρ' => 'r', 'σ' => 's', 'τ' => 't', 'υ' => 'y', 'φ' => 'f', 'χ' => 'x', 'ψ' => 'ps', 'ω' => 'w',
        'ά' => 'a', 'έ' => 'e', 'ί' => 'i', 'ό' => 'o', 'ύ' => 'y', 'ή' => 'h', 'ώ' => 'w', 'ς' => 's',
        'ϊ' => 'i', 'ΰ' => 'y', 'ϋ' => 'y', 'ΐ' => 'i',
        // Turkish
        'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G',
        'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g',
        // Russian
        'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh',
        'З' => 'Z', 'И' => 'I', 'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
        'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
        'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sh', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'Yu',
        'Я' => 'Ya',
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
        'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
        'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu',
        'я' => 'ya',
        // Ukrainian
        'Є' => 'Ye', 'І' => 'I', 'Ї' => 'Yi', 'Ґ' => 'G',
        'є' => 'ye', 'і' => 'i', 'ї' => 'yi', 'ґ' => 'g',
        // Czech
        'Č' => 'C', 'Ď' => 'D', 'Ě' => 'E', 'Ň' => 'N', 'Ř' => 'R', 'Š' => 'S', 'Ť' => 'T', 'Ů' => 'U',
        'Ž' => 'Z',
        'č' => 'c', 'ď' => 'd', 'ě' => 'e', 'ň' => 'n', 'ř' => 'r', 'š' => 's', 'ť' => 't', 'ů' => 'u',
        'ž' => 'z',
        // Polish
        'Ą' => 'A', 'Ć' => 'C', 'Ę' => 'e', 'Ł' => 'L', 'Ń' => 'N', 'Ó' => 'o', 'Ś' => 'S', 'Ź' => 'Z',
        'Ż' => 'Z',
        'ą' => 'a', 'ć' => 'c', 'ę' => 'e', 'ł' => 'l', 'ń' => 'n', 'ó' => 'o', 'ś' => 's', 'ź' => 'z',
        'ż' => 'z',
        // Latvian
        'Ā' => 'A', 'Č' => 'C', 'Ē' => 'E', 'Ģ' => 'G', 'Ī' => 'i', 'Ķ' => 'k', 'Ļ' => 'L', 'Ņ' => 'N',
        'Š' => 'S', 'Ū' => 'u', 'Ž' => 'Z',
        'ā' => 'a', 'č' => 'c', 'ē' => 'e', 'ģ' => 'g', 'ī' => 'i', 'ķ' => 'k', 'ļ' => 'l', 'ņ' => 'n',
        'š' => 's', 'ū' => 'u', 'ž' => 'z'
    );

    // Make custom replacements
    $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);

    // Transliterate characters to ASCII
    if ($options['transliterate']) {
        $str = str_replace(array_keys($char_map), $char_map, $str);
    }

    // Replace non-alphanumeric characters with our delimiter
    $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);

    // Remove duplicate delimiters
    $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);

    // Truncate slug to max. characters
    $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');

    // Remove delimiter from ends
    $str = trim($str, $options['delimiter']);

    return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
}

function do_spintax($str='',$isfile=FALSE,$replace=[])
{
	//{{do_spintax('{bebek|ayam|kuda}')}}
	//$replace = [ 'search 1|replacement 1', 'search 2|replacement 2'];

	if($isfile)
	{
		$str = @file_get_contents(__DIR__ . "/{$str}");
	}

	$sp 	= \bjoernffm\Spintax\Parser::parse($str);
	$res 	= $sp->generate();

	if($replace)
	{
		foreach ($replace as $info)
		{
			$pre = explode('|', $info);

			$src = $pre[0];
			$rep = $pre[1];

			if($rep)
			{
				$res = str_replace($src, $rep, $res);
			}
		}		
	}

	return $res;
}

function exception_error_handler($errno, $errstr, $errfile, $errline ) {
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
}

function grab_curl($url)
{
    $data = curl_init();

    $header[0] = "Accept: text/xml,application/xml,application/xhtml+xml,";
    $header[0] .= "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
    $header[] = "Cache-Control: max-age=0";
    $header[] = "Connection: keep-alive";
    $header[] = "Keep-Alive: 300";
    $header[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $header[] = "Accept-Language: en-us,en;q=0.5";
    $header[] = "Pragma: ";
    curl_setopt($data, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($data, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($data, CURLOPT_URL, $url);
    curl_setopt($data, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; Yahoo! Slurp; http://help.yahoo.com/help/us/ysearch/slurp)');
    curl_setopt($data, CURLOPT_HTTPHEADER, $header);
    curl_setopt($data, CURLOPT_REFERER, '');
    curl_setopt($data, CURLOPT_ENCODING, 'gzip,deflate');
    curl_setopt($data, CURLOPT_AUTOREFERER, true);
    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($data, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($data, CURLOPT_TIMEOUT, 60);
    curl_setopt($data, CURLOPT_MAXREDIRS, 7);
    curl_setopt($data, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($data, CURLOPT_COOKIEJAR, "cookies/cookies.txt");
    curl_setopt($data, CURLOPT_COOKIEFILE, "cookies/cookies.txt");

    $render_output = curl_exec($data);

    curl_close($data);

    return $render_output;
}

function parse_allrecipes($jsongrab){
            $jsonresep = $jsongrab[1];
            $title = html_entity_decode($jsonresep['name']);
            $description = $jsonresep['description'];
            $category = $jsonresep['recipeCategory'];
            $imagex = $jsonresep['image'];
            $check_image = is_null($imagex['width']);
            if ($check_image==TRUE){
                $image = 'https://healthycampus.ucr.edu/sites/g/files/rcwecm2766/files/styles/form_preview/public/man-cooking-fresh-healthy-vegetables-salad-at-kitc-M9YSBBE.jpg';
            } else {
                $image = $imagex['url'];
            }
            $yield = $jsonresep['recipeYield'];
            $preptime = $jsonresep['prepTime'];
            $cooktime = $jsonresep['cookTime'];
            $totaltime = $jsonresep['totalTime'];
            $ingredient = $jsonresep['recipeIngredient'];
            $instructions = $jsonresep['recipeInstructions'];

            unset($step);
            $step = array();
            foreach($instructions as $instruction){
                $step[] = str_replace("\n", '',$instruction['text']);
            }

            if (!empty($jsonresep['nutrition']['calories'])) {
                $nutrition = $jsonresep['nutrition']['calories'];
            } else {
                $nutrition = "100 calories";
            }

            $reviews = $jsonresep['review'];

            unset($review);
            $review = array();
            foreach($reviews as $key => $value){
                $review[] = array(
                    'name' => $value['author']['name'],
                    'body' => $value['reviewBody']
                );
                if($key === 9) {
                    break;
                }
            }

            $data = json_encode([
                [
                    "title" => $title,
                    "description" => $description,
                    "category" => $category,
                    "image" => $image,
                    "yield" => $yield,
                    "preptime" => $preptime,
                    "cooktime" => $cooktime,
                    "totaltime" => $totaltime,
                    "ingredient" => $ingredient,
                    "instruction" => $step,
                    "nutrition" => $nutrition,
                    "review" => $review,
                ]
            ],JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);

    return $data;
}

function parse_food($jsonresep){
    $title = html_entity_decode($jsonresep['name']);
    $description = $jsonresep['description'];
    $category = $jsonresep['recipeCategory'];
    $imagex = $jsonresep['image'];
    $check_image = is_null($imagex);
    if ($check_image==TRUE){
        $image = 'https://healthycampus.ucr.edu/sites/g/files/rcwecm2766/files/styles/form_preview/public/man-cooking-fresh-healthy-vegetables-salad-at-kitc-M9YSBBE.jpg';
    } else {
        $image = $imagex;
    }
    $yield = $jsonresep['recipeYield'];
    $preptime = $jsonresep['prepTime'];
    $cooktime = $jsonresep['cookTime'];
    $totaltime = $jsonresep['totalTime'];
    $ingredient = $jsonresep['recipeIngredient'];
    $instructions = $jsonresep['recipeInstructions'];

    unset($step);
    $step = array();
    foreach($instructions as $instruction){
        $step[] = str_replace("\n", '',$instruction['text']);
    }

    if (!empty($jsonresep['nutrition']['calories'])) {
        $nutrition = $jsonresep['nutrition']['calories'];
    } else {
        $nutrition = "100 calories";
    }

    $reviews = $jsonresep['review'];

    unset($review);
    $review = array();
    foreach($reviews as $key => $value){
        $review[] = array(
            'name' => $value['itemReviewed']['name'],
            'body' => $value['description']
        );
        if($key === 9) {
            break;
        }
    }

    $data = json_encode([
        [
            "title" => $title,
            "description" => $description,
            "category" => $category,
            "image" => $image,
            "yield" => $yield,
            "preptime" => $preptime,
            "cooktime" => $cooktime,
            "totaltime" => $totaltime,
            "ingredient" => $ingredient,
            "instruction" => $step,
            "nutrition" => $nutrition,
            "review" => $review,
        ]
    ],JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);

    return $data;
}