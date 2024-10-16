<!DOCTYPE html>
<html lang="uk">

<?php
header("Cache-Control: no-store, no-cache, no-transform, must-revalidate");
header("Expires: " . date("r"));

include 'datasite.php';
include 'lang.php';
$succsesObj = getSuccsesPhrases('en');
$titlePage = $h1 =  $succsesObj["h1"];
$description = $succsesObj["desc"];
?>

<head>
	<meta http-equiv="Cache-control" content="no-transform">
	<meta http-equiv="Cache-control" content="no-cache">
	<meta name="google" content="nopagereadaloud" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="format-detection" content="telephone=no">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="/<?= $DIR ?>/img/<?= $faviconName ?>">
	<link href="/<?= $DIR ?>/style/style.min.css" rel="stylesheet" type="text/css" media="all" />
	<title><?= $domain ?> - <?= $titlePage ?></title>
	<meta name="description" content="<?= $titlePage ?>">
	<?= isset($headParam) ? $headParam : ""; ?>
</head>

<body class="font-roboto">
	<section class="py-[48px] sm:py-[80px] bg-gray-50">
		<div class="appcontainer">
			<div class="flex flex-col text-center lg:flex-row items-center justify-between gap-[35px]">
				<div class="max-w-[650px] text-center">
					<svg width="175" height="174" style="margin: 0 auto 35px" viewBox="0 0 25 24" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_2_4029)">
							<path
								d="M16.2031 8.20312L11 13.4109L8.75469 11.2031C8.31523 10.7637 7.60344 10.7637 7.16375 11.2031C6.72406 11.6426 6.7243 12.3544 7.16375 12.7941L10.1637 15.7941C10.4234 16.0172 10.7094 16.125 11 16.125C11.2906 16.125 11.5756 16.0151 11.7955 15.7954L17.7955 9.79542C18.2349 9.35597 18.2349 8.64417 17.7955 8.20448C17.356 7.7648 16.6437 7.76719 16.2031 8.20312ZM12.5 0C5.87188 0 0.5 5.37188 0.5 12C0.5 18.6281 5.87188 24 12.5 24C19.1281 24 24.5 18.6281 24.5 12C24.5 5.37188 19.1281 0 12.5 0ZM12.5 21.75C7.12344 21.75 2.75 17.3761 2.75 12C2.75 6.62391 7.12344 2.25 12.5 2.25C17.8766 2.25 22.25 6.62391 22.25 12C22.25 17.3761 17.8766 21.75 12.5 21.75Z"
								fill="#FF8C00" />
						</g>
						<defs>
							<clipPath id="clip0_2_4029">
								<rect width="24" height="24" fill="white" transform="translate(0.5)" />
							</clipPath>
						</defs>
					</svg>
					<h1 class="text-4xl sm:text-[58px] font-bold leading-tight mb-[24px] text-gray-900">
						<?= $h1 ?>
					</h1>
					<p class="text-gray-600 text-xl mb-[54px] mx-auto lg:mx-0 max-w-[550px]">
						<?= $description ?>
					</p>
				</div>

				<div class="max-w-[600px]">
					<img src="/php/img/5320b0fec3aa.jpg" alt="php/img/5320b0fec3aa.jpg" title="php/img/5320b0fec3aa.jpg"
						class="max-h-[500px] rounded-lg shadow-lg" loading="lazy">
				</div>
			</div>
		</div>
	</section>

</body>

</html>