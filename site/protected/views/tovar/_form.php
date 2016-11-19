<?php
/* @var $this TovarController */
/* @var $model Tovar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tovar-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<?php
	$str = '';
	//echo "<pre>";
	//print_r($properties);
	//echo "</pre>";
	$props = [];
	$types = [];
	$propertiesid = [];
	foreach ($properties as $p){
		array_push($props,$p->name);
		array_push($types,$p->type);
		array_push($propertiesid,$p->id);
	}

	//echo "<pre>";
	//print_r($props);
	//print_r($types);
	//echo "</pre>";
	// Добавление свойств товара из базы
	for ($i=0;$i<count($props);$i++){
		$str .= "<option data-type=".$types[$i]." value=".$propertiesid[$i].">".$props[$i]."</option>";//<option value="1">hello</option>
	}
?>
		<div  class="divrow">
			<?php echo $form->labelEx($model,'name'); ?>
			<?php echo $form->textField($model,'name',array('size'=>25,'maxlength'=>25)); ?>
			<?php echo $form->error($model,'name'); ?>
		</div>



		<div  class="divrow">
			<?php echo $form->labelEx($model,'price'); ?>
			<?php echo $form->textField($model,'price'); ?>
			<?php echo $form->error($model,'price'); ?>
		</div>



		<div  class="divrow">
			<?php echo $form->labelEx($model,'nomer'); ?>
			<?php echo $form->textField($model,'nomer',array('size'=>20,'maxlength'=>20)); ?>
			<?php echo $form->error($model,'nomer');?>

		</div>
	<br>
	<label class="required">Свойства</label>

	<!-- здесь добавляется код по onclick="addField()" -->
	<div id="props">
	</div>
	<!-- здесь onclick="addField()" -->
	<a href="#" onclick="addField()">Добавить свойство</a>

	<script>
		var item=0;

		$('#props').on('change','#Tovar_name', function(){
				var orange = $(this).find('option:selected').attr('data-type');
				var str;

				switch (orange){//выбор типа поля для вывода в зависимости от выбранного свойства
					case "0":
						str = "<input type=\"number\" name=\"PropertiesTovar["+item+"][value]\" value=\"0\" step=\"1\">";
						break;
					case "1":
						str ="<input type=\"text\" name=\"PropertiesTovar["+item+"][value]\">";
						break;
					case "2":
						str = "<input type=\"checkbox\" name=\"PropertiesTovar["+item+"][value]\">";
						break;
					default :
						str = "<p>Нет типа свойства</p>";
						break;
					}
				$(this).parent().next('#change').html(str);

		});
		function addField() {
			$('#props').prepend("<div id=\"fields\"><select class=\"options\" name=\"PropertiesTovar["+(++item)+"][id_properties]\" id=\"Tovar_name\"><option selected=\"true\" disabled=\"disabled\">Выберите свойство</option><?=$str?></select></div><div id=\"change\"> </div><br>");
		}

	</script>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->



<!--
  <script>

var sel = $('.options'),
opt = $('option:not(:first-child)', sel);
function review(){
    var chosen = sel.map(function(i, el){
        return $(':selected',el);
    });
    var teamId = 0;
    opt.show().prop('disabled', false);
    chosen.each(function(i, el){
        teamId = $(el).val();
        opt.not(el).filter(function(){
            return $(this).val() == teamId;
        }).hide().prop('disabled', true);
    });
    return false;
}

$('#props').on('change','#Tovar_name',review);
           $('#props').on('change','#Tovar_name', function(){
              console.log('select');
                var orange = $(this).find("option:selected").attr('data-type');
                switch (orange){
                  case "0":
                    $(this).parent().next('#change').html('<input type=\"number\" name=\"browser\" value=\"0\" min=\"0\" step=\"1\"><a href="#" class="del">X</a>');
                    break;
                  case "1":
                    $(this).parent().next('#change').html('<input type=\"text\" name=\"browser\" ><a href="#" class="del">X</a>');
                    break;
                  case "2":
                   $(this).parent().next('#change').html('<input type=\"checkbox\" name=\"browser\" ><a href="#" class="del">X</a>');
                    break;
                  default :
                   $(this).parent().next('#change').html('<p>Нет типа свойства</p>');
                    break;
                }
          });

          var i = 1;
          function addField() {

            $('#props').prepend('<div id=\"fields\">\
                <select class=\"options\" name=\"Tovar[name]\" id=\"Tovar_name\">\
                <option selected=\"true\" disabled=\"disabled\">Выберите свойство</option>\
                <option data-type=0>DDD</option>\
                <option data-type=1>fff</option>\
                <option data-type=2>ggg</option>\
                </select>\
                    </div>\
                    <div id=\"change\" >f</div><br>');
                      sel = $('.options'),
                      opt = $('option:not(:first-child)', sel);
            $('#Tovar_name').change();
          }


  </script>

-----------------------------------------------------------------------------

var arr = ['a', 'b', 'c'];
console.log(Object.keys(arr)); // консоль: ['0', '1', '2']

// Массивоподобный объект
var obj = { 0: 'a', 1: 'b', 2: 'c' };
console.log(Object.keys(obj)); // консоль: ['0', '1', '2']

// Массивоподобный объект со случайным порядком ключей
var an_obj = { 100: 'a', 2: 'b', 7: 'c' };
console.log(Object.keys(an_obj)); // консоль: ['2', '7', '100']

// Свойство getFoo является не перечисляемым свойством
var my_obj = Object.create({}, { getFoo: { value: function() { return this.foo; } } });
my_obj.foo = 1;

console.log(Object.keys(my_obj)); // консоль: ['foo']

-----------------------------------------------------------------------------

//Add more fields dynamically.
function addField(field,area,limit) {
if(!document.getElementById) return; //Prevent older browsers from getting any further.
var field_area = document.getElementById(area);
var all_inputs = field_area.getElementsByTagName("input"); //Get all the input fields in the given area.
//Find the count of the last element of the list. It will be in the format '<field><number>'. If the
		//		field given in the argument is 'friend_' the last id will be 'friend_4'.
		var last_item = all_inputs.length - 1;
		var last = all_inputs[last_item].id;
		var count = Number(last.split("_")[1]) + 1;

		//If the maximum number of elements have been reached, exit the function.
		//		If the given limit is lower than 0, infinite number of fields can be created.
		if(count > limit && limit > 0) return;

		if(document.createElement) { //W3C Dom method.
		var li = document.createElement("li");
		var input = document.createElement("input");
		input.id = field+count;
		input.name = field+count;
		input.type = "text"; //Type of field - can be any valid input type like text,file,checkbox etc.
		li.appendChild(input);
		field_area.appendChild(li);
		} else { //Older Method
		field_area.innerHTML += "<li><input name='"+(field+count)+"' id='"+(field+count)+"' type='text' /></li>";
		}
		}
-->