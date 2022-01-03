<section id="General">
    <table>
        <tr>
            <th class="command">
                + - * / % &amp; | ^ ~ = += -= *= /= %= ++ -- &lt;&lt; &lt;&lt;= &gt;&gt; 
                &gt;&gt;= &amp;= ^= |= || &amp;&amp; () &lt; &gt; &lt;= &gt;= == ! !=
                if while break continue elseif else
            </th>
            <th class="desc">work as in any general purpose programming language</th>
        </tr>
        <tr>
            <td class="bold">Examples</td>
            <td>a = 3 * (5 - 1);<br>a++;<br>a <<= 3;</td>
        </tr>
    </table>
    <table>
		<tr>
            <th class="command">label on_error</th>
            <th class="desc">error handling for snuvi scripts</th>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>if the label on_error exists, the parser will continue at this label</td>
        </tr>
		<tr>
            <td class="bold">Variablen</td>
            <td>error_stacktrace<br>error_message<br>error_name<br>error_function</td>
        </tr>
	</table>
    <table>
        <tr>
            <th class="command">for</th>
            <th class="desc">executes the start instruction once, and repeats the block and the per loop function until the loop check is false</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>for(start_instruction; loop_check; per_loop) { } </td>
        </tr>
        <tr>
            <td class="bold">Examples</td>
            <td>for(i = 0; i < 5; i++) { print("hi"); }</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">functions</th>
            <th class="desc">functions can be written and have their own scope, global variables can be accessed by using a $</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>function function_name(vars, ...) { } </td>
        </tr>
        <tr>
            <td class="bold">Examples</td>
            <td>c = 6;<br>function printStuff(a, b)<br>{<br>print(a, b, $c);<br>}<br>printStuff(4, "Hallo");</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">print</th>
            <th class="desc">prints all arguments connected to the default console</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>print(arg, ...)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">getVar</th>
            <th class="desc">returns the value of a variable</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>getVar(variable_name_string)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">setVar</th>
            <th class="desc">sets the value of a variable</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>setVar(variable_name_string, value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">swap</th>
            <th class="desc">swaps the values of two variables</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>swap(var1, var2)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">nothing</th>
            <th class="desc">does nothing</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>nothing()</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">error</th>
            <th class="desc">sets if full stack exceptions are printed to the logger</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>error(boolean)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">array.new</th>
            <th class="desc">initializes an array with the given size and returns the array</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>array.new(size, ...)</td>
        </tr>
        <tr>
            <td class="bold">Examples</td>
            <td>a = array.new(3);<br>a[0] = 2;<br>b = array.new(3, 2)<br>b[0, 0] = 3;</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">array.getSize</th>
            <th class="desc">returns the size of an array</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>array.getSize(array)</td>
        </tr>
        <tr>
            <td class="bold">Examples</td>
            <td>array.new(a[3, 2])<br>array.getSize(a)<br>array.getSize(a[0])</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">read.number</th>
            <th class="desc">returns a double parsed from a string or null if not possible</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>read.number(double_string)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">wait</th>
            <th class="desc">stops a script until an event is received</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>wait()</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">term</th>
            <th class="desc">terminates a script</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>term()</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">goto</th>
            <th class="desc">jumps to a label</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>goto(label)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>the label can either be a string or @label_name, labels can be made by writing @label_name</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">sgoto</th>
            <th class="desc">jumps to a label after a specific amount of scheduler ticks</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>sgoto(ticks, label)</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>don't use sgoto with 1 ticks<br>all scheduled tasks are instantly executed on server stop<br>auto scheduler slows down execution of sgoto</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">ignoreGoto</th>
            <th class="desc">jumps to a label if it exists</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>ignoreGoto(label)</td>
        </tr>
        <tr>
            <td class="bold">Alias</td>
            <td>iGoto(label)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">gosub</th>
            <th class="desc">jumps to a label and remembers the old position</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>gosub(label)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">return</th>
            <th class="desc">returns to the previous execution position returning nothing or a value</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>return<br>return 5</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">waitfor</th>
            <th class="desc">waits a specific amount of scheduler ticks, no events are received while waiting, sgotos until now won´t be received anymore</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>waitfor(ticks)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">assert</th>
            <th class="desc">throws an exception of the given bool is false</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>assert(boolean)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">isBool</th>
            <th class="desc">returns true if a value is a boolean</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>isBool(value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">isDouble</th>
            <th class="desc">returns true if a value is a double</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>isDouble(value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">isLong</th>
            <th class="desc">returns true if a value is a long</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>isLong(value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">class</th>
            <th class="desc">returns the class of any object</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>class(object)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">usedMemory</th>
            <th class="desc">returns used memory in mega bytes</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>usedmemory()</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">allocatedMemory</th>
            <th class="desc">returns allocated memory in mega bytes</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>allocatedmemory()</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">iterator</th>
            <th class="desc">returns an iterator</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>iterator(collection / list / set)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">hasNext</th>
            <th class="desc">returns true if the iterator has a next entry</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>hasNext(iterator)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">next</th>
            <th class="desc">returns the next entry of an iterator</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>next(iterator)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">remove</th>
            <th class="desc">removes the actual entry of an iterator</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>remove(iterator)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">modTimer</th>
            <th class="desc">modifies the timer for the auto scheduler</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>modTimer(milliseconds)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>milliseconds as long</td>
        </tr>
    </table>
</section>

<section id="Event">
    <table>
        <tr>
            <th class="command">event.load</th>
            <th class="desc">loads an event, a script does not receive non loaded events</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>event.load(event_name_string)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">event.unload</th>
            <th class="desc">unloads an event</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>event.unload(event_name_string)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">event.isloaded</th>
            <th class="desc">returns true if the given event is loaded</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>event.isloaded(event_name_string)</td>
        </tr>
    </table>
</section>

<section id="Script">
    <table>
        <tr>
            <th class="command">script.get</th>
            <th class="desc">returns a script</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>script.get()<br>script.get(script_name)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">script.getId</th>
            <th class="desc">returns the id of a script</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>script.getId(script)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">script.getFromId</th>
            <th class="desc">returns the script with this id</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>script.getFromId(script_id)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">script.getAll</th>
            <th class="desc">returns a list with all active scripts with this name</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>script.getAll(script_name)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">script.term</th>
            <th class="desc">terminates a script</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>script.term(script)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">script.getVar</th>
            <th class="desc">returns the value from a var from script</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>script.getVar(script, var_name)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">script.setVar</th>
            <th class="desc">sets the value from a var from script</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>script.setVar(script, var_name, value)</td>
        </tr>
    </table>
</section>

<section id="ScriptVar">
	<table>
        <tr>
            <th class="command">getScriptVar</th>
            <th class="desc">returns the value from a scriptvar (scriptvars are script-across)</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>getScriptVar(String varname)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">setScriptVar</th>
            <th class="desc">sets the value from a scriptvar (scriptvars are script-across)</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>setScriptVar(String varname, value)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">delScriptVar</th>
            <th class="desc">deletes a scriptvar</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>delScriptVar(String varname)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">clearScriptVars</th>
            <th class="desc">clears all scriptvars</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>clearScriptVars()</td>
        </tr>
    </table>
</section>

<section id="Bit-Operations">
    <table>
        <tr>
            <th class="command">bit.set</th>
            <th class="desc">returns a value, where a single bit is set to 1</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>bit.set(value, bit_index)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>bit_index should be from 0 to 31</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">bit.unset</th>
            <th class="desc">returns a value, where a single bit is set to 0</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>bit.unset(value, bit_index)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>bit_index should be from 0 to 31</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">bit.get</th>
            <th class="desc">returns a single bit as boolean</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>bit.get(value, bit_index)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>bit_index should be from 0 to 31</td>
        </tr>
        <tr>
            <td class="bold">Returns</td>
            <td>true or false depending on the bit</td>
        </tr>
    </table>
</section>

<section id="Math">
	<table>
        <tr>
            <th class="command">math.min</th>
            <th class="desc">returns the lower value</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.min(value1, value2)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">math.max</th>
            <th class="desc">returns the higher value</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.max(value1, value2)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">math.abs</th>
            <th class="desc">returns the absolute value of a value</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.abs(value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">math.pow</th>
            <th class="desc">returns a value to the power of another</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.pow(value, power)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">math.root</th>
            <th class="desc">returns the given root of a value</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.root(value, root)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">math.sqrt</th>
            <th class="desc">returns the square root a value</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.sqrt(value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">math.hypot</th>
            <th class="desc">returns sqrt(x&sup2; + y&sup2;)</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.hypot(x, y)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">math.sin</th>
            <th class="desc">returns the sine of a value</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.sin(value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">math.cos</th>
            <th class="desc">returns the cosine of a value</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.cos(value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">math.tan</th>
            <th class="desc">returns the tangent of a value</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.tan(value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">math.asin</th>
            <th class="desc">returns the arcsine of a value</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.asin(value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">math.acos</th>
            <th class="desc">returns the arccosine of a value</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.acos(value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">math.atan</th>
            <th class="desc">returns the arctangent of a value</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.atan(value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">math.e</th>
            <th class="desc">returns Euler's number</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.e()</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">math.pi</th>
            <th class="desc">returns pi</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.pi()</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">math.ln</th>
            <th class="desc">returns the natural logarithm of a value</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.ln(value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">math.log</th>
            <th class="desc">returns the decadic logarithm of a value</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.log(value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">math.random</th>
            <th class="desc">returns a random natural number between both values including both borders</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.random(from, to)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">math.round</th>
            <th class="desc">returns a value rounded</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.round(value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">math.roundUp</th>
            <th class="desc">returns a value rounded up</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.roundUp(value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">math.roundDown</th>
            <th class="desc">returns a value rounded down</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.roundDown(value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">math.roundComma</th>
            <th class="desc">returns a value rounded to a specific number of decimals</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>math.roundComma(value, number_of_dezimals)</td>
        </tr>
    </table>
</section>

<section id="List">
    <table>
        <tr>
            <th class="command">list.new</th>
            <th class="desc">returns a new list</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>list.new()</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">list.exists</th>
            <th class="desc">returns true if the given value is a list</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>list.exists(value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">list.add</th>
            <th class="desc">adds an element to a list</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>list.add(list, element)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">list.addAll</th>
            <th class="desc">adds all given elements to the list</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>list.addAll(List, element, ...)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">list.remove</th>
            <th class="desc">removes an element from a list and returns true on success</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>list.remove(list, element)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">list.removeIndex</th>
            <th class="desc">removes an element from a list at the given index and returns true on success</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>list.removeIndex(list, index)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">list.contains</th>
            <th class="desc">returns true if a list contains a given element</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>list.contains(list, element)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">list.getSize</th>
            <th class="desc">returns the size of a list</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>list.getSize(list)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">list.getIndex</th>
            <th class="desc">returns the element at a given index of a list</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>list.getIndex(list, index)</td>
        </tr>
        <tr>
            <td class="bold">Alias</td>
            <td>list.get(list, index)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">list.setIndex</th>
            <th class="desc">sets the element at a given index of a list and returns the old element</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>list.setIndex(list, index, element)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">list.getIndexOf</th>
            <th class="desc">returns the index of a given element in a list or -1 if the list does not contain the element</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>list.getIndexOf(list, element)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">list.clear</th>
            <th class="desc">removes all elements of a list</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>list.clear(list)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">list.sort</th>
            <th class="desc">sorts a list</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>list.sort(list)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">list.reverse</th>
            <th class="desc">reverses the order of a list</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>list.reverse(list)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">list.shuffle</th>
            <th class="desc">shuffles a list</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>list.shuffle(list)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">list.iterator (deprecated)</th>
            <th class="desc">returns the iterator of a list</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>list.iterator(list)</td>
        </tr>
    </table>
</section>

<section id="Map">
    <table>
        <tr>
            <th class="command">map.new</th>
            <th class="desc">returns a new map</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>map.new()</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">map.exists</th>
            <th class="desc">returns true if the given value is a map</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>map.exists(value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">map.add</th>
            <th class="desc">adds a key value pair to a map and returns the old value</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>map.add(map, key, value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">map.remove</th>
            <th class="desc">removes a key from a map and returns the old value</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>map.remove(map, key)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">map.contains</th>
            <th class="desc">returns true if a map contains a given key</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>map.contains(map, key)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">map.getSize</th>
            <th class="desc">returns the size of a map</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>map.getSize(map)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">map.get</th>
            <th class="desc">returns the value associated with a key in a map</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>map.get(map, key)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">map.getOrDefault</th>
            <th class="desc">returns the value associated with a key in a map or the default value if the key is not present</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>map.getOrDefault(map, key, default)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">map.iterator</th>
            <th class="desc">returns the iterator of a map</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>map.iterator(map)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">map.getKey</th>
            <th class="desc">returns the key</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>map.getKey(iterator_element)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">map.getValue</th>
            <th class="desc">returns the value</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>map.getValue(iterator_element)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">map.setValue</th>
            <th class="desc">sets the newValue and returns the oldValue</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>map.setValue(iterator_element, newValue)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">map.clear</th>
            <th class="desc">removes all key value pairs from a map</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>map.clear(map)</td>
        </tr>
    </table>
</section>

<section id="Set">
    <table>
        <tr>
            <th class="command">set.new</th>
            <th class="desc">returns a new set</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>set.new()</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">set.exists</th>
            <th class="desc">returns true if the given value is a set</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>set.exists(value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">set.add</th>
            <th class="desc">adds a key to a set and returns true if the key was added</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>set.add(set, key)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">set.addAll</th>
            <th class="desc">adds all given keys to a set</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>set.addAll(set, key, ...)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">set.remove</th>
            <th class="desc">removes a key from a set and returns true if the key was removed</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>set.remove(set, key)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">set.contains</th>
            <th class="desc">returns true if a set contains a given key</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>set.contains(set, key)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">set.getSize</th>
            <th class="desc">returns the size of a set</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>set.getSize(set)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">set.clear</th>
            <th class="desc">removes all keys from a map</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>set.clear(set)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">set.toList</th>
            <th class="desc">returns all keys of a set as list</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>set.toList(set)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">set.iterator (deprecated)</th>
            <th class="desc">returns the iterator of a set</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>set.iterator(set)</td>
        </tr>
    </table>
</section>

<section id="Time">
    <table>
        <tr>
            <th class="command">time.new</th>
            <th class="desc">returns a calendar of a given time in milliseconds</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>time.new(time_millis)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>time_millis are milliseconds passed since 01.01.1970</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">time.getMillis</th>
            <th class="desc">returns the current millisecond time</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>time.getMillis()</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">time.getNanos</th>
            <th class="desc">returns the current nanosecond time of the whole engine</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>time.getNanos()</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">time.from</th>
            <th class="desc">returns the millisecond time of a calendar</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>time.from(calendar)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">time.nextDay</th>
            <th class="desc">sets the time of a calendar to the beginning of the next day</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>time.nextDay(calendar)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">time.getYear</th>
            <th class="desc">returns the year of a calendar</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>time.getYear(calendar)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">time.getMonth</th>
            <th class="desc">returns the month of a calendar</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>time.getMonth(calendar)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">time.getDay</th>
            <th class="desc">returns the day of a calendar</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>time.getDay(calendar)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">time.getHour</th>
            <th class="desc">returns the hours of a calendar</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>time.getHour(calendar)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">time.getMinute</th>
            <th class="desc">returns the minutes of a calendar</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>time.getMinute(calendar)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">time.getSecond</th>
            <th class="desc">returns the seconds of a calendar</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>time.getSecond(calendar)</td>
        </tr>
    </table>
</section>

<section id="String">
    <table>
        <tr>
            <th class="command">string</th>
            <th class="desc">returns any object as string</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string(object)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">string.number</th>
            <th class="desc">returns a number as string without unnecessary .0</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.number(number)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">string.class</th>
            <th class="desc">returns the class of any object</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.class(objekt)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">string.toUpperCase</th>
            <th class="desc">returns a string capitalized</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.toUpperCase(string)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">string.toLowerCase</th>
            <th class="desc">returns a string decapitalized</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.toLowerCase(string)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">string.split</th>
            <th class="desc">returns a string splitted by a given separator as array </th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.split(separator, string)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">string.concat</th>
            <th class="desc">returns one string which connects all given arguments</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.concat(arg, ...)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">string.startsWith</th>
            <th class="desc">returns true if a string starts with another starting from a given index</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.startsWith(string, search_text, start_index)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">string.endsWith</th>
            <th class="desc">returns true if a string ends with another</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.endsWith(string, search_text)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">string.contains</th>
            <th class="desc">returns true if a string is in another</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.contains(string, search_text)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">string.indexOf</th>
            <th class="desc">returns the index of string in another starting from a given index or -1 if not found</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.indexOf(string, search_text, start_index)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">string.lastIndexOf</th>
            <th class="desc">returns the last index of a string in another starting from a given index or -1 if not found</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.lastIndexOf(string, search_text, start_index)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">string.replace</th>
            <th class="desc">replaces all occurrences of a given string in another with a given string</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.replace(string, search_text, swap_text)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">string.trim</th>
            <th class="desc">returns a string without leading and trailing whitespaces</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.trim(string)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">string.matches</th>
            <th class="desc">returns true if a string matches a regex</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.matches(string, regex)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">string.charcode</th>
            <th class="desc">returns the character code of an index in a string</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.charcode(string, index)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">string.fromCode</th>
            <th class="desc">returns a string from a character code</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.fromCode(character_code)</td>
        </tr>
    </table>
   <table>
        <tr>
            <th class="command">string.length</th>
            <th class="desc">returns the length of a string</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.length(string)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">string.subString</th>
            <th class="desc">returns a sub string starting at one index and ending at another exclusively</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.subString(string, from_index, to_index)</td>
        </tr>
    </table>
</section>

<section id="File">
    <table>
        <tr>
            <th class="command">file.new</th>
            <th class="desc">returns a new file</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>file.new(path)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">file.exists</th>
            <th class="desc">returns true if a file exists</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>file.exists(file)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">file.delete</th>
            <th class="desc">removes a file and returns true on success</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>file.delete(file)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">file.getName</th>
            <th class="desc">returns the name of a file</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>file.getName(file)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">file.getList</th>
            <th class="desc">returns all files in a folder as list</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>file.getList(file)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">file.read</th>
            <th class="desc">returns all lines in a file as list</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>file.read(file)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">file.write</th>
            <th class="desc">writes all entries of a list to a file</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>file.write(file, list)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">file.isFile</th>
            <th class="desc">returns true if a file is a file</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>file.isFile(file)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">file.isDirectory</th>
            <th class="desc">returns true if a file is a directory</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>file.isDirectory(file)</td>
        </tr>
    </table>
</section>

<section id="Config">
    <table>
        <tr>
            <th class="command">config.new</th>
            <th class="desc">returns a new config</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>config.new(path, name)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">config.exists</th>
            <th class="desc">returns true if the config exists</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>config.exists(config)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">config.save</th>
            <th class="desc">saves a config and returns true on success</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>config.save(config)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">config.load</th>
            <th class="desc">loads a config</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>config.load(config)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">config.delete</th>
            <th class="desc">removes a config</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>config.delete(config)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">config.set</th>
            <th class="desc">sets a key value pair in a config</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>config.set(config, key, value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">config.getBool</th>
            <th class="desc">returns a boolean or a default value from a config key</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>config.getBool(config, key, default)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">config.getDouble</th>
            <th class="desc">returns a double or a default value from a config key</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>config.getDouble(config, key, default)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">config.getString</th>
            <th class="desc">returns a string or a default value from a config key</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>config.getString(config, key, default)</td>
        </tr>
    </table>
</section>