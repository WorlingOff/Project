<?php
function selectLanguage($langages, $default="fr"){
	if (!empty($_SERVER["HTTP_ACCEPT_LANGUAGE"])) {
		$langs_navigateur = explode(',', $_SERVER["HTTP_ACCEPT_LANGUAGE"]);
		foreach ($$langs_navigateur as $lang_navigateur) {
			$aLang = strtolower($lang_navigateur,0,2);
			if (in_array($alang, $langages)) {
				return $alang;
			}
		}
	}
	return $default;
}

$langue = selectLanguage(array("fr","en","es","lt","de","cn"))
?>