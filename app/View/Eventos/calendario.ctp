<script>
	$(document).ready(function() {
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		var calendar = $('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			selectable: false,
			selectHelper: false,
			select: function(start, end, allDay) {
				var title = prompt('Event Title:');
				if (title) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
					);
				}
				calendar.fullCalendar('unselect');
			},
			<?php if($rol == 'empleado'){
				echo 'editable: false,';
			}else{
				echo 'editable: true,';
			} ?>
						
			events: [
			<?php foreach ($posts as $evento): ?>
				{
					id : '<?php echo h($evento["Evento"]["id"]); ?>',
					title: '<?php echo h($evento["Evento"]["nombre"]); ?>',
					start: new Date('<?php echo h($evento["Evento"]["fecha_inicio"]); ?>'),
					end: new Date('<?php echo h($evento["Evento"]["fecha_termino"]); ?>'),
					url: 'view/<?php echo h($evento["Evento"]["id"]);?>',
					
				},
			<?php endforeach; ?>
			],
			eventDrop: function(event, delta) {
				    if(event.end!=null){
						$fecha_ter = ( (event.end.getDate()+1) + '-' + (event.end.getMonth()+1) +'-' + event.end.getFullYear());
					}
					else{
						$fecha_ter= ( (event.start.getDate()+1) + '-' + (event.start.getMonth()+1) +'-' + event.start.getFullYear());
				    }
				    $.ajax(
				    {
					    type: 'POST',
						url: 'calendario', //file where like unlike status change in database
						data:{ 
							id: event.id , 
							fecha: ( (event.start.getDate()+1) + '-' + (event.start.getMonth()+1) +'-' + event.start.getFullYear()),
							fecha_t : $fecha_ter
						},				
						success: function(data)
						{
						   alert("Evento "+ event.title + " actualizado");
					    },
							
		 			});
		 	}		
		 });
	});
</script>

	      <div class = "span8 offset2">
                <div class="ysheet">
                  <div class="bor"></div>
                   <div class="ysheet1">
                      <!-- Title -->
                      <h3>Calendario</h3>
                      <!-- Para -->
                      <?php echo $this->Html->link( "<button class='btn btn-primary btn-lg'>Agregar Evento</button>", array("action" => "add"), array("escape" => false));?>
                      <?php echo $this->Html->link( "<button class='btn btn-primary btn-lg'>Vista de Lista</button>", array("action" => "index"), array("escape" => false));?>
		      <div id="calendar"></div>
                   </div>
                   <div class="ysheet2"></div>
                   <div class="ysheet3"></div>
                </div>
		</div>              
