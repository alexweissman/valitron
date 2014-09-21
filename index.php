<?

require_once("src/Valitron/Validator.php");

$rules = [
    'required' => 'foo',
    'accepted' => 'bar',
    'integer' =>  'bar'
];

$v = new Valitron\Validator(array('foo' => 'bar', 'bar' => 1));
$v->rules($rules);
$v->rule('min', 'bar', 10);
$v->rule('equals', 'bar', 'foo');
$v->rule('different', 'fizz', 'buzz');
$v->rule('date', 'fizz');
$v->rule('in', 'buzz', array("spam", "eggs", "parrots"));
$v->rule('dateAfter', 'fizz');
$v->rule('alphaNum', 'fizz');
$v->validate();

$result = $v->exportRules("bootstrapvalidator", array("prettyPrint" => true));

echo "<pre>";
print_r($result);
echo "</pre>";

?>