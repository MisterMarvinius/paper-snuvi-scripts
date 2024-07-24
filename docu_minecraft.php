<section id="Event-List">
	<table>
        <tr>
            <th class="command"></th>
            <th class="desc">footnote</th>
        </tr>
        <tr>
            <td class="bold">*</td>
            <td>writable</td>
        </tr>
        <tr>
            <td class="bold">**</td>
            <td>can be null</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">entity_change_block</th>
            <th class="desc">an entity changes a block</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>entity<br>block<br>change_data as blockdata for the new state<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity_damage</th>
            <th class="desc">an entity gets damage</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>entity<br>damage_source<br><a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/event/entity/EntityDamageEvent.DamageCause.html" target="_blank">cause</a> as string<br>**damager_block<br>**damager_entity<br>damage<br>raw_damage<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity_heal</th>
            <th class="desc">an entity gets healed</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>entity<br>*heal<br><a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/event/entity/EntityRegainHealthEvent.RegainReason.html" target="_blank">cause</a> as string<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">living_death</th>
            <th class="desc">a living_entity dies</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>living_entity<br>damage_source<br>*drops as list of itemstacks<br>*experience<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">block_drop</th>
            <th class="desc">a destroyed block drops something</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>block<br>old_material<br>*drops as list with ItemEntities</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity_click</th>
            <th class="desc">an entity gets right_clicked</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>entity<br><a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/inventory/EquipmentSlot.html" target="_blank">hand</a><br>*cancel</td>
        </tr>
    </table>
	</table>
    <table>
        <tr>
            <th class="command">living_spawn</th>
            <th class="desc">a living entity spawns</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>living_entity<br><a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/event/entity/CreatureSpawnEvent.SpawnReason.html" target="_blank">cause</a> as string<br>location<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity_spawn</th>
            <th class="desc">an entity spawns</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>entity<br>location<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity_remove</th>
            <th class="desc">an entity is removed from a world</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>entity</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">living_tame</th>
            <th class="desc">a living entity gets tamed</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>living_entity<br>tamer<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity_mount</th>
            <th class="desc">an entity mounts another entity</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>entity<br>mount as entity<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity_dismount</th>
            <th class="desc">an entity dismounts another entity</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>entity<br>mount as entity</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player_login</th>
            <th class="desc">a player tries to connect to the server</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>result</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player_join</th>
            <th class="desc">a player joins the server</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>*message as text</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>message = null means no message</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player_quit</th>
            <th class="desc">a player leaves the server</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>*message as text</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>message = null means no message</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player_pre_respawn</th>
            <th class="desc">a player will respawn</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>devs can set the spawn-location on this event</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player_post_respawn</th>
            <th class="desc">a player has respawned</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>devs can refill the inventory on this event</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player_toggle_sneak</th>
            <th class="desc">a player toggles sneak</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>sneak as boolean<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player_drop</th>
            <th class="desc">a player drops an item</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>item_entity<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">living_pickup</th>
            <th class="desc">a living entity picks up an item</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>living_entity<br>item_entity<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player_move</th>
            <th class="desc">a player moves in a before defined area</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>id</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">block_break</th>
            <th class="desc">a block is broken by a player</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>block<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">block_place</th>
            <th class="desc">a block is placed by a player</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>block<br><a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/inventory/EquipmentSlot.html" target="_blank">hand</a><br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">block_click</th>
            <th class="desc">a block gets clicked by a player</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>**block<br><a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/event/block/Action.html" target="_blank">action</a> as string<br><a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/inventory/EquipmentSlot.html" target="_blank">hand</a><br>*cancel</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block_burn</th>
            <th class="desc">a block is burned</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>block<br>block_source<br>*cancel</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block_spread</th>
            <th class="desc"><a href="https://jd.papermc.io/paper/1.20/org/bukkit/event/block/BlockSpreadEvent.html" target="_blank">Paper API#BlockSpreadEvent</a></th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>block<br>block_source<br>*cancel</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block_fade</th>
            <th class="desc"><a href="https://jd.papermc.io/paper/1.20/org/bukkit/event/block/BlockFadeEvent.html" target="_blank">Paper API#BlockFadeEvent</a></th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>block<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">bucket_use</th>
            <th class="desc">a bucket is filled / vacated</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>block<br>bucket as material<br><a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/inventory/EquipmentSlot.html" target="_blank">hand</a><br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">inv_click</th>
            <th class="desc">a slot in an container gets clicked</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>inv<br>**inv_clicked<br>inv_title as text<br>inv_slot as double<br><a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/event/inventory/ClickType.html" target="_blank">click</a> as string<br><a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/event/inventory/InventoryAction.html" target="_blank">action</a> as string<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">snuvi_click</th>
            <th class="desc">a slot in an custom inventory gets clicked</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>inv<br>inv_title as text<br>inv_slot as double<br><a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/event/inventory/ClickType.html" target="_blank">click</a> as string<br><a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/event/inventory/InventoryAction.html" target="_blank">action</a> as string</td>
        </tr>
		<tr>
            <td class="bold">Info</td>
            <td>Custom inventories are not script-across.</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">inv_close</th>
            <th class="desc">an inventory gets closed</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>inv<br>inv_title as text</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">item_consume</th>
            <th class="desc">an item gets consumed by a player</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>item<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">pre_craft</th>
            <th class="desc">a player crafts an item</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>players as list with players<br>*item<br>*inv</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>item can be set to null</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">craft</th>
            <th class="desc">a player takes the result item out of craft inventory</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>item<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player_change_world</th>
            <th class="desc">a player changes the world</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>from world as string</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player_teleport</th>
            <th class="desc">a player teleports</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>from as location<br>to as location<br><a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/event/player/PlayerTeleportEvent.TeleportCause.html" target="_blank">cause</a> as string<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">fishing</th>
            <th class="desc">a player fishes something</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>**entity<br>*experience<br>hook as entity<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">command</th>
            <th class="desc">a player uses a non custom-command</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>command as string<br>permission as string<br>command_class as string<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">custom_command</th>
            <th class="desc">something uses a custom-command</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>sender<br>command as string<br>args as list<br>string_args as list with strings only</td>
        </tr>
		<tr>
            <td class="bold">Info</td>
            <td>sender can be a player, console...<br></td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">chat</th>
            <th class="desc">a player writes into chat</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>*message as text<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">projectile_hit</th>
            <th class="desc">a thrown projectile hits a block or an entity</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>**shooter<br>projectile<br>**entity_hit<br>**block_hit<br>*cancel</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">arm_swing</th>
            <th class="desc">a player makes an arm_swing (might be a leftclick into air)</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br><a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/inventory/EquipmentSlot.html" target="_blank">hand</a><br>*cancel</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">explosion</th>
            <th class="desc">explosions are cancelled on default</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>entity<br>*fire as boolean<br>*radius<br>*cancel | true</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">missing_command</th>
            <th class="desc">a sender uses a non-existing command</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>sender<br>command</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">missing_perm</th>
            <th class="desc">a sender has no permissions for a used command</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>sender<br>command<br>perm</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player_data_tick</th>
            <th class="desc">thrown if a timer from data.setTimer reached 0</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>var</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player_elytra_start</th>
            <th class="desc">thrown if a player starts using an elytra</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player_elytra_stop</th>
            <th class="desc">thrown if a player stops using an elytra</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player_item_held</th>
            <th class="desc">a player changes their hotbar slot</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>from as double<br>to as double<br>*cancel</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player_swap_hand_items</th>
            <th class="desc">a player swaps their items in their hands</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player<br>*cancel</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player_jump</th>
            <th class="desc">a player jumps</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>player</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">world_load</th>
            <th class="desc">a world gets loaded</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>world</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">vote</th>
            <th class="desc">a vote gets received</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>from as string<br>name as string<br>ip as string<br>timestamp as double</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">vehicle_enter</th>
            <th class="desc">an entity enters a vehicle</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>vehicle<br>entity</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">vehicle_exit</th>
            <th class="desc">an living_entity exits a vehicle</th>
        </tr>
        <tr>
            <td class="bold">Variables</td>
            <td>vehicle<br>living_entity</td>
        </tr>
    </table>
</section>

<section id="Event">
    <table>
        <tr>
            <th class="command">event.addMoveData</th>
            <th class="desc">creates an area for player_move events and returns the id</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>event.addMoveData(location1, location2, cooldown, livingtime, [uuid / uuid_string / player])</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>
                cooldown: -1 terminated after a single trigger<br>
                cooldown: > 0 clock rate in ticks, no termination<br>
				livingtime: -1 area lives forever<br>
                livingtime: > 0 stays amount of ticks alive<br>
				uuid / uuid_string / player: event only triggers for this player
            </td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>on script termination this area will be removed</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command"event.removeMoveData</th>
            <th class="desc">removes an area for player_move events by id</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>event.removeMoveData(id)</td>
        </tr>
    </table>
</section>

<section id="Ban">
	<table>
        <tr>
            <th class="command">ban.add</th>
            <th class="desc">bans a player from the server</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>ban.add(player_name, reason, banner, [end_date])</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>
				reason as string<br>
				banner as string (the person who bans, write what you want)<br>
				end_date as calendar object
			</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">ban.remove</th>
            <th class="desc">unbans a player from the server</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>ban.remove(player_uuid)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">ban.addIp</th>
            <th class="desc">bans an IP from the server</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>ban.addIp(ip, reason, banner, [end_date])</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>
				reason as string<br>
				banner as string (the person who bans, write what you want)<br>
				end_date as calendar object
			</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">ban.removeIp</th>
            <th class="desc">unbans an IP from the server</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>ban.removeIp(ip)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">ban.kick</th>
            <th class="desc">kicks a player from the server</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>ban.kick(player, reason)</td>
        </tr>
		<tr>
            <td class="bold">Arguments</td>
            <td>reason as text</td>
        </tr>
    </table>
</section>

<section id="Block">
    <table>
        <tr>
            <th class="command">block.setData</th>
            <th class="desc">set a block</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.setData(block, blockdata, [boolean | false])</td>
        </tr>
		<tr>
            <td class="bold">Arguments</td>
            <td>boolean true places with block update</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.setMaterial</th>
            <th class="desc">set a block</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.setMaterial(block, <a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/Material.html" target="_blank">material</a>, [boolean | false])</td>
        </tr>
		<tr>
            <td class="bold">Arguments</td>
            <td>boolean true places with block update</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">block.clone</th>
            <th class="desc">clone a block to a location</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.clone(block, location, [boolean | false])</td>
        </tr>
		<tr>
            <td class="bold">Arguments</td>
            <td>boolean true places with block update</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">block.setSign</th>
            <th class="desc">set text on a sign</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.setSign(block, side, row, text)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>row from 0 to 3<br>side: "FRONT"/"BACK"</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">block.getSign</th>
            <th class="desc">returns the text of a sign from a specific row</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.getSign(block, side, row)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>row from 0 to 3<br>side: "FRONT"/"BACK"</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">block.signSetWaxed</th>
            <th class="desc">wax/unwax a sign</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.signSetWaxed(block, boolean)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">block.get</th>
            <th class="desc">returns a block</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.get(location)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">block.getData</th>
            <th class="desc">returns the blockdata of a block</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.getData(block)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.getInventory</th>
            <th class="desc">returns the inventory of a block or null if it is not a container</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.getInventory(block)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">block.getType</th>
            <th class="desc">returns the <a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/Material.html" target="_blank">material</a> of a block</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.getType(block)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">block.getLocation</th>
            <th class="desc">returns the location of a block</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.getLocation(block)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">block.setOpen</th>
            <th class="desc">set the open property for a block</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.setOpen(block, boolean)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">block.isOpen</th>
            <th class="desc">returns true if the block is open</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.isOpen(block)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.getTag</th>
            <th class="desc">returns a tag</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.getTag(String tag_name)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.hasTag</th>
            <th class="desc">returns true if a block has a tag</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.hasTag(block, tag)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.break</th>
            <th class="desc">breaks a block and drops the item</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.break(block, [entity])</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.getEntity</th>
            <th class="desc">return the tile entity of a block</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.getEntity(block)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.setEntity</th>
            <th class="desc">set the tile entity for a block</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.setEntity(block, entity)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.isOpenable</th>
            <th class="desc">returns true if a block is openable</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.isOpenable(block)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.isDoor</th>
            <th class="desc">returns true if a block is a door</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.isDoor(block)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.setDoorHinge</th>
            <th class="desc">sets the door hinge of a block</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.setDoorHinge(block, door_hinge_string)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.getDoorHinge</th>
            <th class="desc">returns the door hinge of a block as string</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.getDoorHinge(block)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.setBisectedHalf</th>
            <th class="desc">sets the bisected half of a block</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.setBisectedHalf(block, bisected_half_string)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.getBisectedHalf</th>
            <th class="desc">returns the bisected half of a block as string</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.getBisectedHalf(block)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.isBisected</th>
            <th class="desc">returns true if a block is bisected</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.isBisected(block)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.setDirectionalFace</th>
            <th class="desc">sets the directional face of a block</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.setDirectionalFace(block, directional_face_string)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.getDirectionalFace</th>
            <th class="desc">returns the directional face of a block as string</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.getDirectionalFace(block)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.getDirectionalFaces</th>
            <th class="desc">returns a list with directional faces as string of a block</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.getDirectionalFaces(block)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.isDirectional</th>
            <th class="desc">returns true if a block is directional</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.isDirectional(block)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.setPersistent</th>
            <th class="desc">sets the persistence of a block</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.setPersistent(block, boolean)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.isPersistent</th>
            <th class="desc">returns true if a block is persistent</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.isPersistent(block)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.isLeaves</th>
            <th class="desc">returns true if a block is a leaf</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.isLeaves(block)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.canHaveWater</th>
            <th class="desc">returns true if a block can have water</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.canHaveWater(block)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.isWaterLogged</th>
            <th class="desc">returns true if a block is waterlogged</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.isWaterLogged(block)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">block.setWaterLogged</th>
            <th class="desc">set the waterlogged property of a block</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>block.setWaterLogged(block, boolean)</td>
        </tr>
    </table>
</section>

<section id="Databank">
    <table>
        <tr>
            <th class="command">databank.prepare</th>
            <th class="desc">returns the prepared statement</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>databank.prepare(sql-query, [boolean autoclose | true])</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">databank.setInt</th>
            <th class="desc">sets an int in a statement</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>databank.setInt(statement, index, int)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">databank.setDouble</th>
            <th class="desc">sets a double in a statement</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>databank.setDouble(statement, index, double)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">databank.setLong</th>
            <th class="desc">sets a long in a statement</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>databank.setLong(statement, index, long)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">databank.setString</th>
            <th class="desc">sets a string in a statement</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>databank.setString(statement, index, string)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">databank.setBool</th>
            <th class="desc">sets a boolean in a statement</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>databank.setBool(statement, index, boolean)</td>
        </tr>
    </table>
	
    <table>
        <tr>
            <th class="command">databank.getInt</th>
            <th class="desc">returns an int from a result set</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>databank.getInt(result-set, index)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">databank.getDouble</th>
            <th class="desc">returns a double from a result set</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>databank.getDouble(result-set, index)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">databank.getLong</th>
            <th class="desc">returns a long from a result set</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>databank.getLong(result-set, index)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">databank.getString</th>
            <th class="desc">returns a string from a result set</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>databank.getString(result-set, index)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">databank.getBool</th>
            <th class="desc">returns a boolean from a result set</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>databank.getBool(result-set, index)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">databank.execute</th>
            <th class="desc">returns a result-set after executing a reading statement</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>databank.execute(statement)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">databank.workerExecute</th>
            <th class="desc">executes a writing statement</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>databank.workerExecute(statement)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">databank.next</th>
            <th class="desc">returns true and jumps to the next entry if the result-set has a next entry</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>databank.next(result-set)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">databank.close</th>
            <th class="desc">manual closing of a result-set</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>databank.close(result-set)</td>
        </tr>
    </table>
</section>

<section id="Citizen">
	<table>
        <tr>
            <th class="command">citizen.spawn</th>
            <th class="desc">returns the spawned citizen</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>citizen.spawn(location, name)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">citizen.despawn</th>
            <th class="desc">despawns a citizen</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>citizen.despawn(citizen)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">citizen.destroy</th>
            <th class="desc">destroys a citizen</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>citizen.destroy(citizen)</td>
        </tr>
    </table>
	<table>
	<table>
        <tr>
            <th class="command">citizen.setSkin</th>
            <th class="desc">sets the skin of a citizen</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>citizen.setSkin(citizen, <a href="https://mineskin.org/gallery" target="_blank">texture_value</a>, <a href="https://mineskin.org/gallery" target="_blank">texture_signature</a>)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">citizen.setName</th>
            <th class="desc">sets the name of a citizen</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>citizen.setName(citizen, name)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">citizen.showNameplate</th>
            <th class="desc">sets the nameplate visibility of a citizen</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>citizen.showNameplate(citizen, boolean)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">citizen.setEquip</th>
            <th class="desc">equips a citizen</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>citizen.setEquip(citizen, <a href="https://jd.citizensnpcs.co/net/citizensnpcs/api/trait/trait/Equipment.EquipmentSlot.html" target="_blank">slot_name</a>, itemstack)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">citizen.getName</th>
            <th class="desc">returns the name as string</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>citizen.getName(citizen)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">citizen.lookclose</th>
            <th class="desc">makes a citizen look at nearby players</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>citizen.lookclose(citizen)</td>
        </tr>
    </table>
</section>

<section id="Config">
    <table>
        <tr>
            <th class="command">config.saveAsync</th>
            <th class="desc">saves a config asynchronous</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>config.saveAsync(config)</td>
        </tr>
    </table>
</section>


<section id="Damage">
	<table>
        <tr>
            <th class="command">damage.get</th>
            <th class="desc">returns a damage_source</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>damage.get(damage_name)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
			 <td>
				damage_name:
				inFire,	lightningBolt, onFire, lava, hotFloor, inWall, cramming, drown, starve, cactus, fall, flyIntoWall, outOfWorld, generic, magic, wither, anvil, fallingBlock, dragonBreath, dryout, sweetBerryBush, freeze, fallingStalactite, stalagmite, outsideBorder, genericKill
            </td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">damage.getType</th>
            <th class="desc">returns the type of a damage_source as string</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>damage.getType(damage_source)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">damage.getImmediateSource</th>
            <th class="desc">returns the direct damager entity of a damage_source</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>damage.getImmediateSource(damage_source)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">damage.getTrueSource</th>
            <th class="desc">returns the indirect damager entity of a damage_source</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>damage.getTrueSource(damage_source)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">damage.isDifficultyscaled</th>
            <th class="desc">returns true if the damage_source will have its damageamount scaled based on the current difficulty</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>damage.isDifficultyscaled(damage_source)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">damage.isIndirect</th>
            <th class="desc">returns true if the damage_source is indirect</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>damage.isIndirect(damage_source)</td>
        </tr>
    </table>
</section>

<section id="Data">
	<table>
        <tr>
            <th class="command">data.set</th>
            <th class="desc">sets data for a player (script-across)</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>data.set(player, key, value)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">data.get</th>
            <th class="desc">returns data from a player (script-across)</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>data.get(player, key)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">data.setTimer</th>
            <th class="desc">sets timed data for a player (script-across)</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>data.setTimer(player, key, ticks)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>set ticks to -1 to delete the timer<br>when the timer expires the event player_data_tick is thrown</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">data.getTimer</th>
            <th class="desc">returns the remaining ticks of timed data (script-across)</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>data.getTimer(player, key)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">data.clear</th>
            <th class="desc">deletes all data from a player (script-across)</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>data.clear(player)</td>
        </tr>
    </table>
</section>

<section id="Gamerule">
	<table>
        <tr>
            <th class="command">gamerule.getKey</th>
            <th class="desc">returns a gamerule_key</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>gamerule.getKey(gamerule_string)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">gamerule.getValue</th>
            <th class="desc">return a gamerule_value from a world</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>gamerule.getValue(world, gamerule_key)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">gamerule.setBool</th>
            <th class="desc">sets a gamerule_value</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>gamerule.setBool(world, gamerule_value, boolean)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">gamerule.setInt</th>
            <th class="desc">sets a gamerule_key</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>gamerule.setInt(world, gamerule_key, value)</td>
        </tr>
    </table>
    </table>
</section>

<section id="General">
    <table>
        <tr>
            <th class="command">msg</th>
            <th class="desc">sends a message</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>msg(receiver, text)</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>receiver:<br>sender (player / console)<br>"dev" (perm "script.debug" needed)<br>"online"<br>"server"</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">isPlayer</th>
            <th class="desc">returns true if the argument is a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>isPlayer(anything)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">isLiving</th>
            <th class="desc">returns true if the argument is a living entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>isLiving(anything)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">isCitizen</th>
            <th class="desc">returns true if the argument is a citizen</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>isCitizen(anything)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">setMOTD</th>
            <th class="desc">sets the message of the day in the server list</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>setMOTD(string)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">getMOTD</th>
            <th class="desc">returns the message of the day as text</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>getMOTD()</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">stop</th>
            <th class="desc">stops the server</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>stop()</td>
        </tr>
    </table>
</section>

<section id="Material">
	<table>
        <tr>
            <th class="command">material.get</th>
            <th class="desc">returns a material</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>material.get(<a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/Material.html" target="_blank">material_name</a>)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">material.getAll</th>
            <th class="desc">returns an array with all materials</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>material.getAll()</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">material.isItem</th>
            <th class="desc">returns true if a material is an holdable item</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>material.isItem(material)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">material.isBlock</th>
            <th class="desc">returns true if a material is an placeable block</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>material.isBlock(material)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">material.isSolid</th>
            <th class="desc">returns true if a material is a block and solid (can be built upon)</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>material.isSolid(material)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">material.setCooldown</th>
            <th class="desc">sets the cooldown of a material of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>material.setCooldown(material, player, ticks)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">material.getSlot</th>
            <th class="desc">returns the slot to use for an item attribute</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>material.getSlot(material)</td>
        </tr>
    </table>
</section>

<section id="Item">
	<table>
        <tr>
            <th class="command">item.new</th>
            <th class="desc">return an itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.new(material, [amount | 1])</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">item.drop</th>
            <th class="desc">drops an itemstack at a location and returns the item_entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.drop(itemstack, location)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">item.getType</th>
            <th class="desc">returns the <a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/Material.html" target="_blank">material</a> of an itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.getType(itemstack)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">item.getMaxAmount</th>
            <th class="desc">returns the maximum size of an itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.getMaxAmount(itemstack)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">item.getAmount</th>
            <th class="desc">returns the size of an itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.getAmount(itemstack)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">item.setAmount</th>
            <th class="desc">sets the size of an itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.setAmount(itemstack, size)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">item.hasName</th>
            <th class="desc">returns true if the itemstack has a modified name</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.hasName(itemstack)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">item.getName</th>
            <th class="desc">returns the name of an itemstack as text or null</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.getName(itemstack)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">item.setName</th>
            <th class="desc">sets the name of an itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.setName(itemstack, text_name)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">item.getLore</th>
            <th class="desc">returns a list of texts with all lores of an itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.getLore(itemstack)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">item.setLore</th>
            <th class="desc">sets the lore of an itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.setLore(itemstack, list)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>list of texts</td>
        </tr>
    </table>
	<table>
	    <tr>
            <th class="command">item.addAttribute</th>
            <th class="desc">adds an attribute to an itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.addAttribute(itemstack, <a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/attribute/Attribute.html" target="_blank">attribute</a>, slot, double, <a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/attribute/AttributeModifier.Operation.html" target="_blank">operation</a>)</td>
        </tr>
    </table>
	<table>
	    <tr>
            <th class="command">item.clearAttributes</th>
            <th class="desc">removes all custom attributes from an itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.clearAttributes(itemstack)</td>
        </tr>
    </table>
	<table>
	    <tr>
            <th class="command">item.hasAttributes</th>
            <th class="desc">returns true if an itemstack has attributes</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.hasAttributes(itemstack)</td>
        </tr>
    </table>
	<table>
	    <tr>
            <th class="command">item.addDefaultTags</th>
            <th class="desc">adds the default attributes to an itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.addDefaultTags(itemstack)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">item.addFlag</th>
            <th class="desc">adds a flag to an itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.addFlag(itemstack, <a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/inventory/ItemFlag.html" target="_blank">flag</a>)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">item.removeFlag</th>
            <th class="desc">removes a flag from an itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.removeFlag(itemstack, <a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/inventory/ItemFlag.html" target="_blank">flag</a>)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">item.addPotion</th>
            <th class="desc">adds a potion effect to an item</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.addPotion(itemstack, <a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/potion/PotionEffectType.html" target="_blank">potion_name</a>, duration, power)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">item.clone</th>
            <th class="desc">returns a copy of an itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.clone(itemstack)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">item.getTag</th>
            <th class="desc">returns an item tag</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.getTag(String tag_name)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">item.hasTag</th>
            <th class="desc">returns true if an itemstack has an item tag</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.hasTag(itemstack, tag)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">item.isDamageable</th>
            <th class="desc">returns true if the itemstack is damageable</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.isDamageable(itemstack)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">item.getMaxDamage</th>
            <th class="desc">returns the maximum damage the itemstack can get</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.getMaxDamage(itemstack)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">item.setDamage</th>
            <th class="desc">sets the damage of the itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.setDamage(itemstack, amount)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">item.getDamage</th>
            <th class="desc">returns the damage of an itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.getDamage(itemstack)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">item.entity.get</th>
            <th class="desc">returns the itemstack of an item_entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.entity.get(item_entity)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">item.entity.set</th>
            <th class="desc">sets the itemstack of an item_entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.entity.set(item_entity, itemstack)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">item.entity.setPickupDelay</th>
            <th class="desc">sets the pickupdelay for an item_entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.entity.setPickupDelay(item_entity, ticks)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">item.custom.getAll</th>
            <th class="desc">returns an array with all custom items</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.custom.getAll()</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">item.custom.get</th>
            <th class="desc">returns a custom item</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.custom.get(custom_item_name)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">item.custom.new</th>
            <th class="desc">returns an itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.custom.new(custom_item)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">item.getCustom</th>
            <th class="desc">returns a custom item or null</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>item.getCustom(itemstack)</td>
        </tr>
    </table>
</section>

<section id="Enchantment">
	<table>
        <tr>
            <th class="command">enchantment.get</th>
            <th class="desc">returns an enchantment</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>enchantment.get(enchantment_string)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td><a href="https://minecraft-de.gamepedia.com/Verzauberung#Verzauberungen" target="_blank">Minecraft Wiki Verzauberungen</a> (ID-Name verwenden)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">enchantment.getMaxLevel</th>
            <th class="desc">returns the maximum level of an enchantment</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>enchantment.getMaxLevel(enchantment)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">enchantment.add</th>
            <th class="desc">adds an enchantment to an itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>enchantment.add(enchantment, itemstack, level)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">enchantment.getLevel</th>
            <th class="desc">returns the level of an enchantment an itemstack has</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>enchantment.getLevel(enchantment, itemstack)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">enchantment.readFromItem</th>
            <th class="desc">returns a map with all enchantments of an itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>enchantment.readFromItem(itemstack)</td>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>enchantment as key, level as value</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">enchantment.writeToItem</th>
            <th class="desc">writes all enchantments from the map on the itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>enchantment.writeToItem(map, itemstack)</td>
        </tr>
    </table>
</section>

<section id="Debug">
	<table>
        <tr>
            <th class="command">debug.clear</th> 
            <th class="desc">clears all cached debug messages</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>debug.clear()</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">debug.getSize</th> 
            <th class="desc">returns the amount of all cached debug messages</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>debug.getSize()</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">debug.getIndex</th> 
            <th class="desc">returns the debug message from an index</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>debug.getIndex(index)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">debug.setConsolePrint</th> 
            <th class="desc">true prints snuvi debug messages on console (not stack traces)</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>debug.setConsolePrint(boolean)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">debug.getIndexTime</th> 
            <th class="desc">returns the time of a debug message from an index</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>debug.getIndexTime(index)</td>
        </tr>
    </table>
</section>

<section id="Error">
	<table>
        <tr>
            <th class="command">error.clear</th> 
            <th class="desc">clears all cached errors</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>error.clear()</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">error.getSize</th> 
            <th class="desc">returns the amount of all cached errors</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>error.getSize()</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">error.getIndex</th> 
            <th class="desc">returns the error from an index</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>error.getIndex(index)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">error.setConsolePrint</th> 
            <th class="desc">true prints snuvi errors on console (not stack traces)</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>error.setConsolePrint(boolean)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">error.getIndexTime</th> 
            <th class="desc">returns the time of an error from an index</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>error.getIndexTime(index)</td>
        </tr>
    </table>
</section>

<section id="Location">
    <table>
        <tr>
            <th class="command">loc.new</th> 
            <th class="desc">creates a location</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.new(world, x, y, z)<br>loc.new(world, x, y, z, yaw, pitch)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.getX</th>
            <th class="desc">returns the x coordinate</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.getX(location)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.setX</th>
            <th class="desc">sets the x coordinate</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.setX(location, value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.addX</th>
            <th class="desc">adds the value to the x coordinate</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.addX(location, value)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">loc.getBlockX</th>
            <th class="desc">returns the x block coordinate</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.getBlockX(location)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.getY</th>
            <th class="desc">returns the y coordinate</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.getY(location)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.setY</th>
            <th class="desc">sets the y coordinate</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.setY(location, value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.addY</th>
            <th class="desc">adds the value to the y coordinate</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.addY(location, value)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">loc.getBlockY</th>
            <th class="desc">returns the y block coordinate</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.getBlockY(location)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.getZ</th>
            <th class="desc">returns the z coordinate</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.getZ(location)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.setZ</th>
            <th class="desc">sets the z coordinate</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.setZ(location, value)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.addZ</th>
            <th class="desc">adds the value to the z coordinate</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.addZ(location, value)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">loc.getBlockZ</th>
            <th class="desc">returns the z block coordinate</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.getBlockZ(location)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.setYaw</th>
            <th class="desc">sets the yaw of a location</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.setYaw(location, Yaw)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.getYaw</th>
            <th class="desc">returns the yaw of a location</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.getYaw(location)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.setPitch</th>
            <th class="desc">sets the pitch of a location</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.setPitch(location, Pitch)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.getPitch</th>
            <th class="desc">returns the pitch of a location</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.getPitch(location)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.getWorld</th>
            <th class="desc">returns the world of a location as object</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.getWorld(location)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.distance</th>
            <th class="desc">returns the difference between two locations</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.distance(location1, location2)</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>there is an error if the two locations have not the same world</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.isBetween</th>
            <th class="desc">returns true if the location is between two other locations</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.isBetween(location, location1, location2)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.mod</th>
            <th class="desc">returns a modified copy of the location</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.mod(location, x, y, z)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.add</th>
            <th class="desc">modifies the original location</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.add(location, x, y, z)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.set</th>
            <th class="desc">modifies the original location</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.set(location, x, y, z)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.sort</th>
            <th class="desc">sort in lowest and highest coordinates</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.sort(location1, location2)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">loc.iterator</th>
            <th class="desc">returns the iterator for the area</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.iterator(world, x1, y1, z1, x2, y2, z2)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">loc.explode</th>
            <th class="desc">makes an explosion at a location</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>loc.explode(location, entity, radius, fire_bool, block_damage_bool)</td>
        </tr>
		<tr>
			<td class="bold">Info</td>
            <td>entity can be null</td>
        </tr>
    </table>
</section>

<section id="Read">
    <table>
        <tr>
            <th class="command">read.spawnMob</th>
            <th class="desc">spawns a mob and returns the entity or null</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>read.spawnMob(location, nbt_string)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">read.player</th>
            <th class="desc">returns a player or null</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>read.player(player_name)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">read.item</th>
            <th class="desc">returns an itemstack or null</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
			<td>read.item(nbt_string)</td>
        </tr>
    </table>
	<table>
		<tr>
			<th class="command">read.uuid</th>
			<th class="desc">returns a uuid or null</th>
		</tr>
		<tr>
			<td class="bold">Format</td>
			<td>read.uuid(uuid_string)</td>
		</tr>
	</table>
	<table>
		<tr>
			<th class="command">read.slot</th>
			<th class="desc">returns a slot or null</th>
		</tr>
		<tr>
			<td class="bold">Format</td>
			<td>read.slot(<a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/inventory/EquipmentSlot.html" target="_blank">slot_name</a>)</td>
		</tr>
	</table>
	<table>
		<tr>
			<th class="command">read.blockData</th>
			<th class="desc">returns blockdata or null</th>
		</tr>
		<tr>
			<td class="bold">Format</td>
			<td>read.blockData(blockdata_string)</td>
		</tr>
	</table>
	<table>
		<tr>
			<th class="command">read.blockEntity</th>
			<th class="desc">returns blockentity or null</th>
		</tr>
		<tr>
			<td class="bold">Format</td>
			<td>read.blockEntity(blockentity_string)</td>
		</tr>
	</table>
</section>

<section id="String">
	<table>
        <tr>
            <th class="command">string.item</th>
            <th class="desc">returns an nbt-tag from an itemstack as string</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.item(itemstack)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">string.entity</th>
            <th class="desc">returns a serialized entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.entity(entity)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">string.text</th>
            <th class="desc">returns a text converted to a string</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.text(text)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">string.blockData</th>
            <th class="desc">returns blockdata converted to a string</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.blockData(blockdata)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">string.blockEntity</th>
            <th class="desc">returns a blockentity converted to a string</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>string.blockEntity(blockentity)</td>
        </tr>
    </table>
</section>

<section id="Text">
	<table>
        <tr>
            <th class="command">text.new</th>
            <th class="desc">returns a text</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>text.new(string)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">text.click</th>
            <th class="desc">returns a clickable text</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>text.click(show_text, execute_string)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">text.hover</th>
            <th class="desc">returns a hoverable text</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>text.hover(show_text, hover_text)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">text.link</th>
            <th class="desc">returns a clickable text for links</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>text.link(text, link_string)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">text.clipBoard</th>
            <th class="desc">returns a clickable text to copy a string into the clipboard</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>text.clipBoard(text, string)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">text.merge</th>
            <th class="desc">returns merged texts</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>text.merge(text, ...)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">text.item</th>
            <th class="desc">returns a hoverable itemstack text</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>text.item(show_text, itemstack)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">text.suggest</th>
            <th class="desc">returns a clickable text for chat/command line insertion</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>text.suggest(show_text, suggest_text)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">text.color</th>
            <th class="desc">returns rgb colored text</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>text.color(text, red, green, blue)</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>red green blue from 0 to 255</td>
        </tr>
    </table>
</section>

<section id="Plot">
    <table>
        <tr>
            <th class="command">plot.add</th>
            <th class="desc">returns the created plot</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.add(location1, location2, [plot_id])</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.remove</th>
            <th class="desc">removes a plot from a world</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.remove(plot, world)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.getId</th>
            <th class="desc">returns the plot_id</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.getId(plot)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.setName</th>
            <th class="desc">sets the name of a plot</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.setName(plot, name)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.getName</th>
            <th class="desc">returns the name of a plot</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.getName(plot)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.get</th>
            <th class="desc">returns a list with all plots at a location</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.get(location)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.getMinX</th>
            <th class="desc">returns the lowest x coordinate of a plot</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.getMinX(plot)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.getMinY</th>
            <th class="desc">returns the lowest y coordinate of a plot</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.getMinY(plot)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.getMinZ</th>
            <th class="desc">returns the lowest z coordinate of a plot</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.getMinZ(plot)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.getMaxX</th>
            <th class="desc">returns the lowest x coordinate of a plot</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.getMaxX(plot)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.getMaxY</th>
            <th class="desc">returns the lowest y coordinate of a plot</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.getMaxY(plot)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.getMaxZ</th>
            <th class="desc">returns the lowest z coordinate of a plot</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.getMaxZ(plot)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.intersecting</th>
            <th class="desc">returns a list with all intersecting plots</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.intersecting(world, x1, y1, z1, x2, y2, z2)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.setFlags</th>
            <th class="desc">sets all flags to the boolean</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.setFlags(plot, flags, boolean)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.getFlags</th>
            <th class="desc">returns all flags as double</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.getFlags(plot)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.hasFlags</th>
            <th class="desc">returns true if all flags existing</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.hasFlags(plot, flags)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.getOwners</th>
            <th class="desc">returns a list with all owners as uuid</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.getOwners(plot)</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>list can be modified</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.check</th>
            <th class="desc">returns true if the player is owner of any plot from that location OR if any plot contains all given flags. returns empty if there is no plot</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.check(location, player, Int flags, Boolean empty)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>player can be null<br>flags: 0 if not desired<br>1 PLACE_FLAG<br>2 BREAK_FLAG<br>4 BUCKET_FLAG<br>8 HIT_AMBIENT_FLAG<br>16 BLOCK_INTERACT_FLAG<br>32 ENTITY_INTERACT_FLAG</td>
        </tr>
        <tr>
            <td class="bold">Examples</td>
            <td>
				plot.check(loc, null, 1, false) ==> true if place_flag existing<br>
				plot.check(loc, null, 2, false) ==> true if break_flag existing<br>
				plot.check(loc, null, 3, false) ==> true if break_flag and place_flag existing<br>
				plot.check(loc, player, 0, false) ==> true if player is owner<br>
				plot.check(loc, player, 0, true) ==> true if player is owner or if there is no plot
			</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.iterator</th>
            <th class="desc">returns the iterator for the plots in a world [for a player]</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.iterator(world, [uuid])</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">plot.addBlock</th>
            <th class="desc">makes a block public</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.addBlock(location)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">plot.removeBlock</th>
            <th class="desc">makes a block non-public</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.removeBlock(location)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">plot.hasBlock</th>
            <th class="desc">returns true if a block is public</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.hasBlock(location)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.blockIterator</th>
            <th class="desc">returns the iterator for protected blocks in a world</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.blockIterator(world)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.position.getX</th>
            <th class="desc">returns the x coordinate of a position</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.position.getX(position)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.position.getY</th>
            <th class="desc">returns the y coordinate of a position</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.position.getY(position)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">plot.position.getZ</th>
            <th class="desc">returns the z coordinate of a position</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.position.getZ(position)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">plot.savePlots</th>
            <th class="desc">saves all plot changes</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.savePlots(world)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">plot.saveBlocks</th>
            <th class="desc">saves all block changes</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>plot.saveBlocks(world)</td>
        </tr>
    </table>
</section>

<section id="Table">
	<table>
        <tr>
            <th class="command">table.new</th>
            <th class="desc">returns a table object</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>table.new(color, width, width, width, ...)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">table.getStart</th>
            <th class="desc">returns the head of a table</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>table.getStart(table)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">table.getMiddle</th>
            <th class="desc">returns the middle of a table</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>table.getMiddle(table)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">table.getEnd</th>
            <th class="desc">returns the end of a table</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>table.getEnd(table)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">table.get</th>
            <th class="desc">returns a line of a table</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>table.get(table, args...)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">table.setSize</th>
            <th class="desc">defines the pixel size of a character</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>table.setSize("character", pixel_int)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">table.setEmpty1</th>
            <th class="desc">defines the 1 pixel empty character</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>table.setEmpty1(string)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">table.setEmpty2</th>
            <th class="desc">defines the 2 pixel empty character</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>table.setEmpty2(string)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">table.setEmpty4</th>
            <th class="desc">defines the 4 pixel empty character</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>table.setEmpty4(string)</td>
        </tr>
    </table>
</section>

<section id="Command">
    <table>
        <tr>
            <th class="command">command.add</th>
            <th class="desc">registers a custom command</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>command.add(string)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">command.remove</th>
            <th class="desc">removes a custom command</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>command.remove(string)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">command.clear</th>
            <th class="desc">removes all custom commands</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>command.clear()</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">command.exists</th>
            <th class="desc">returns true if a custom command exists</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>command.exists(string)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">command.newHelp</th>
            <th class="desc">returns a help-object</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>command.newHelp(string, perm)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">command.newHelpLiteral</th>
            <th class="desc">returns a help argument</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>command.newHelpLiteral(string, [perm])</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">command.newHelpBool</th>
            <th class="desc">returns a help argument</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>command.newHelpBool(string, [perm])</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">command.newHelpDouble</th>
            <th class="desc">returns a help argument</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>command.newHelpDouble(string, min, max, [perm])</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">command.newHelpFloat</th>
            <th class="desc">returns a help argument</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>command.newHelpFloat(string, min, max, [perm])</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">command.newHelpInt</th>
            <th class="desc">returns a help argument</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>command.newHelpInt(string, min, max, [perm])</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">command.newHelpLong</th>
            <th class="desc">returns a help argument</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>command.newHelpLong(string, min, max, [perm])</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">command.newHelpString</th>
            <th class="desc">returns a help argument</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>command.newHelpString(string, boolean, [perm])</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>boolean true means greedy</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">command.newHelpSpecial</th>
            <th class="desc">returns a help argument</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>command.newHelpSpecial(type, string, [perm])</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>type = "Item", "Particle", "Potion", "Sound", "Enchantment", "Player"</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">command.registerHelp</th>
            <th class="desc">registers a command-help</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>command.registerHelp(help-object)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">command.addHelpArgument</th>
            <th class="desc">adds a help argument to a help</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>command.addHelpArgument(help, helpArgument)</td>
        </tr>
    </table>
</section>

<section id="Scoreboard">
    <table>
        <tr>
            <th class="command">sb.add</th>
            <th class="desc">adds text to the scoreboard</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>sb.add(player, unique_index, string)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>index from 1 to 99</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>vanilla: maximum 12 rows</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">sb.remove</th>
            <th class="desc">removes a row from the scoreboard</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>sb.remove(player, unique_index)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>index as number from 1 to 99</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">sb.addRaw</th>
            <th class="desc">adds text to the scoreboard</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>sb.addRaw(player, index, unique_string)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>index from 1 to 99</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>vanilla: maximum 12 rows</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">sb.removeRaw</th>
            <th class="desc">removes a row from the scoreboard</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>sb.removeRaw(player, unique_string)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">sb.setTitle</th>
            <th class="desc">sets a scoreboard title</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>sb.setTitle(player, text)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">sb.clear</th>
            <th class="desc">clears the scoreboard of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>sb.clear(player)</td>
        </tr>
    </table>
</section>

<section id="Script">
    <table>
        <tr>
            <th class="command">script.start</th>
            <th class="desc">connects all scripts, starts them as one script and returns the script</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>script.start(scriptpath1, scriptpath2, ...)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">script.startNamed</th>
            <th class="desc">connects all scripts, starts them as one script and returns the script</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>script.startNamed(custom_name, scriptpath1, scriptpath2, ...)</td>
        </tr>
			<td class="bold">Info</td>
			<td>named scripts can be selected with script.get by their custom_name</td>
		<tr>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">script.callEvent</th>
            <th class="desc">calls an event</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>script.callEvent(event, [script])</td>
        </tr>
    </table>
</section>

<section id="Title">
    <table>
        <tr>
            <th class="command">title.send</th>
            <th class="desc">shows a player a title (and subtitle if set)</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>title.send(player, title, [subtitle], [fadeIn | 20], [stay | 60], [fadeOut | 20])</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">title.remove</th>
            <th class="desc">removes the shown title</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>title.remove(player)</td>
        </tr>
    </table>
</section>

<section id="Permission">
    <table>
        <tr>
            <th class="command">perm.clear</th>
            <th class="desc">removes all permissions from a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>perm.clear(player)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">perm.add</th>
            <th class="desc">adds a permission to a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>perm.add(perm, player)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">perm.remove</th>
            <th class="desc">removes a permission from a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>perm.remove(perm, player)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">perm.has</th>
            <th class="desc">returns true if a player has the permission</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>perm.has(perm, player)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">perm.update</th>
            <th class="desc">updates the permissions of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>perm.update(player)</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>call this after adding all player permissions</td>
        </tr>
    </table>
</section>

<section id="Player">
    <table>
        <tr>
            <th class="command">players.toList</th>
            <th class="desc">returns a list with all players in a world</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>players.toList(World)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">players.near</th>
            <th class="desc">returns a list with all players within a radius of a location</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>players.near(location, radius)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">players.getAmount</th>
            <th class="desc">returns the number of online players</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>players.getAmount()</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.getHead</th>
            <th class="desc">returns the head of a player as an itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.getHead(uuid, name)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>uuid and(!) name of the same(!) player</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.getNearest</th>
            <th class="desc">returns the next player to a location</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.getNearest(location)</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>searches in a radius of 10 blocks</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player.setDisplayName</th>
            <th class="desc">sets the name of a player in the tab list</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.setDisplayName(player, text)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.action</th>
            <th class="desc">shows a message in the action bar</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.action(receiver, text)</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>receiver:<br>sender (player / console)<br>"dev" (perm "script.debug" needed)<br>"online"<br>"server"</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.getTargetBlock</th>
            <th class="desc">returns the block a player is looking at</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.getTargetBlock(player, radius, [fluidmode|false])</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>
				Vanilla default radius: 5<br>
				radius will be cast to int<br>
				fluidmode: true does not ignore water
			</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.getName</th>
            <th class="desc">returns the name of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.getName(uuid / uuid_string / player)</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>uuid and uuid_string can return null</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.getUuid</th>
            <th class="desc">returns the uuid of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.getUuid(player / player_name)</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>player_name can return null</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.getUuidFromId</th>
            <th class="desc">returns the uuid of a player from their id</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.getUuidFromId(player_id)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.getNameFromId</th>
            <th class="desc">returns the name of a player from their id</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.getNameFromId(player_id)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player.getId</th>
            <th class="desc">returns the id of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.getId(player / uuid / uuid_string)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player.get</th>
            <th class="desc">returns a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.get(player / uuid / uuid_string)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.respawn</th>
            <th class="desc">forces the respawn of a dead player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.respawn(player)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.setCompass</th>
            <th class="desc">sets the target of a compass</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.setCompass(player, location)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.setHunger</th>
            <th class="desc">sets the hunger of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.setHunger(player, number)</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>Vanilla default: 0-20</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.getHunger</th>
            <th class="desc">returns the hunger of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.getHunger(player)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.setSaturation</th>
            <th class="desc">sets the saturation of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.setSaturation(player, number)</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>Vanilla default: 5, maximum: 20</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.getSaturation</th>
            <th class="desc">returns the saturation of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.getSaturation(player)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.setGamemode</th>
            <th class="desc">set the gamemode for a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.setGamemode(player, gamemode)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>gamemode as "SURVIVAL" / "CREATIVE" / "ADVENTURE" / "SPECTATOR"</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.isSurvival</th>
            <th class="desc">returns true if a player is in gamemode survival</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.isSurvival(player)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.isCreative</th>
            <th class="desc">returns true if a player is in gamemode creative</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.isCreative(player)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.isAdventure</th>
            <th class="desc">returns true if a player is in gamemode adventure</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.isAdventure(player)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.isSpectator</th>
            <th class="desc">returns true if a player is in gamemode spectator</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.isSpectator(player)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.hasFly</th>
            <th class="desc">returns true if a player is allowed to fly</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.hasFly(player)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.isFlying</th>
            <th class="desc">returns true if a player is flying</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.isFlying(player)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.setFly</th>
            <th class="desc">set if a player is allowed to fly</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.setFly(player, boolean)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.dropInventory</th>
            <th class="desc">drops the inventory of a player at a location</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.dropInventory(player, location)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.getItemAmount</th>
			<th class="desc">returns the amount of an exact itemstack from a players inventory</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.getItemAmount(player, itemstack)</td>
        </tr>
    <table>
        <tr>
            <th class="command">player.damageItem</th>
            <th class="desc">damages the item in the hand of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.damageItem(player, damage_amount)</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>unbreaking (and more) is considered</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.setSpawn</th>
            <th class="desc">sets the spawn location of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.setSpawn(player, location)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.getSpawn</th>
            <th class="desc">returns the spawn location of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.getSpawn(player)</td>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>spawn is linked to the bed spawn, if no bed spawn exists the return value may be null</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.giveItem</th>
            <th class="desc">gives an itemstack to a player and returns the item amount which did not fit in a players inventory</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.giveItem(player, itemstack)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.addItem</th>
			<th class="desc">returns 0 if the itemstack is added, otherwise the itemstack will not be added and the not fitting item amount is returned</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.addItem(player, itemstack)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.removeItem</th>
            <th class="desc">returns 0 if the itemstack is removed, otherwise the itemstack will not be removed and the missing item amount is returned</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.removeItem(player, itemstack)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">player.getIP</th>
            <th class="desc">returns the ip-address of a player as string</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.getIp(player)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player.getInv</th>
            <th class="desc">returns the (non-copy) inventory of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.getInv(player)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player.getEnderInv</th>
            <th class="desc">returns the (non-copy) ender inventory of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.getEnderInv(player)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player.getTargetEntity</th>
            <th class="desc">returns the targeted entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.getTargetEntity(player, radius)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>radius will be cast to int<br></td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player.getTargetCitizen</th>
            <th class="desc">returns the targeted citizen</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.getTargetCitizen(player, radius)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>radius will be cast to int<br></td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player.getLevel</th>
            <th class="desc">returns the level of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.getLevel(player)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player.setLevel</th>
            <th class="desc">sets the level of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.setLevel(player, level)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>level is cast to int</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player.getExp</th>
            <th class="desc">returns the experience of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.getExp(player)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player.setExp</th>
            <th class="desc">sets the experience of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.setExp(player, exp)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>exp is cast to float</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player.addTotalExp</th>
            <th class="desc">modifies the experience of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.addTotalExp(player, exp)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>exp is cast to int</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player.hide</th>
            <th class="desc">hides a player from another player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.hide(player, player_to_hide)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player.show</th>
            <th class="desc">shows a player or another player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.show(player, player_to_show)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player.setFlySpeed</th>
            <th class="desc">sets the fly speed of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.setFlySpeed(player, speed)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>speed is cast to float</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player.setWalkSpeed</th>
            <th class="desc">sets the walk speed of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.setWalkSpeed(player, speed)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>speed is cast to float</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player.isSneaking</th>
            <th class="desc">returns true if a player is sneaking</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.isSneaking(player)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player.isBlocking</th>
            <th class="desc">returns true if a player is blocking with their shield</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.isBlocking(player)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player.setSlot</th>
            <th class="desc">sets the active slot of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.setSlot(player, slot)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>slot from 0 to 8</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">player.resetSleep</th>
            <th class="desc">resets the time since last rest</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>player.resetSleep(player)</td>
        </tr>
    </table>
</section>

<section id="Inventory">
    <table>
        <tr>
            <th class="command">inv.new</th>
            <th class="desc">returns a new custom inventory</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>inv.new(slotdata, title)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>
				slotdata as string:<br>
				0 = no slot, throws no event<br>
				1 = normal slot, throws inv_click event<br>
				2 = button slot, throws snuvi_click event
			</td>
        </tr>
        <tr>
            <td class="bold">Examples</td>
            <td>inv.new("002122000", ...)</td>
        </tr>
    </table>
	</table>
	<table>
		<tr>
            <th class="command">inv.getSize</th>
            <th class="desc">returns the size of an inventory</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>inv.getSize(inventory)</td>
        </tr>
    <table>
        <tr>
            <th class="command">inv.setItem</th>
            <th class="desc">sets an itemstack on a specific slot in an inventory</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>inv.setItem(inventory, slotindex, itemstack)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">inv.getItem</th>
            <th class="desc">returns an itemstack from a specific slot of an inventory</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>inv.getItem(inventory, slotindex)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">inv.open</th>
            <th class="desc">shows an inventory to a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>inv.open(inventory, player)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">inv.close</th>
            <th class="desc">closes an inventory of a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>inv.close(player)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">inv.clear</th>
            <th class="desc">clears an inventory</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>inv.clear(inv)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">inv.getID</th>
            <th class="desc">returns the id of an inventory or -1 if no custom inventory</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>inv.getID(inventory)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">inv.closeAll()</th>
            <th class="desc">closes all custom inventories of all players</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>inv.closeAll()</td>
        </tr>
    </table>
</section>

<section id="World">
    <table>
        <tr>
            <th class="command">world.get</th>
            <th class="desc">returns a world</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.get(name)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">world.getName</th>
            <th class="desc">returns the name of a world</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.getName(world)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">world.getPlayers</th>
            <th class="desc">returns a list with all players in a world</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.getPlayers(world)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">world.setDifficulty</th>
            <th class="desc">sets the difficulty of a world</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.setDifficulty(world, <a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/Difficulty.html" target="_blank">difficulty</a>)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">world.setSpawn</th>
            <th class="desc">sets the world spawn</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.setSpawn(location)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">world.getSpawn</th>
            <th class="desc">returns the world spawn as location</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.getSpawn(world)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">world.getAll</th>
            <th class="desc">returns a list with all loaded worlds</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.getAll()</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">world.setTime</th>
            <th class="desc">sets the time for a world</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.setTime(world, time)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>time from 0 to 24000</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">world.getTime</th>
            <th class="desc">returns the time of a world</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.getTime(world)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">world.hasRain</th>
            <th class="desc">returns true if it is raining in the world</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.hasStorm(world)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">world.hasThunder</th>
            <th class="desc">returns true if there is thunder in the world</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.hasThunder(world)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">world.clearWeather</th>
            <th class="desc">clears the weather of a world</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.clearWeather(world, ticks)</td>
        </tr>
		<tr>
            <td class="bold">Info</td>
            <td>ticks when the next rain is allowed to start</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">world.setRain</th>
            <th class="desc">sets the weather of a world to rain</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.setRain(world, ticks)</td>
        </tr>
		<tr>
            <td class="bold">Info</td>
            <td>ticks how long the rain stays</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">world.setThunder</th>
            <th class="desc">sets the weather of a world to thunder</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.setThunder(world, ticks)</td>
        </tr>
		<tr>
            <td class="bold">Info</td>
            <td>ticks how long the thunder stays</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">world.getEntities</th>
            <th class="desc">returns a list with all entities in a world</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.getEntities(world)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">world.load</th>
            <th class="desc">returns the loaded world</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.load(name)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">world.unload</th>
            <th class="desc">returns true if unloading a world is successful</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.unload(world)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">world.getLoadedChunks</th>
            <th class="desc">returns an array with all loaded chunks</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.getLoadedChunks(world)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">world.unloadChunk</th>
            <th class="desc">returns true if unloading a chunk is successful</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.unloadChunk(chunk)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">world.getChunkX</th>
            <th class="desc">returns the x chunk coordinate</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.getChunkX(chunk)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">world.getChunkZ</th>
            <th class="desc">returns the x chunk coordinate</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.getChunkZ(chunk)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">world.isForceLoadedChunk</th>
            <th class="desc">returns true if a chunk is forced to be loaded</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>world.isForceLoadedChunk(chunk)</td>
        </tr>
    </table>
</section>

<section id="Entity">
	<table>
        <tr>
            <th class="command">entity.getUuid</th>
            <th class="desc">returns the uuid of an entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.getUuid(entity)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">entity.getType</th>
            <th class="desc">returns the type of an entity as string</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.getType(entity)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.setName</th>
            <th class="desc">sets the name of an entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.setName(entity, text, [nameVisibility | false])</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>nameVisibility true means an always visible name)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.getName</th>
            <th class="desc">returns the name of an entity as text</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.getName(entity)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.getLocation</th>
            <th class="desc">returns the location of an entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.getLocation(entity)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.teleport</th>
            <th class="desc">teleports an entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.teleport(entity, location)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.setInvulnerable</th>
            <th class="desc">sets an entity (in)vulnerable</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.setInvulnerable(entity, boolean)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.remove</th>
            <th class="desc">removes an entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.remove(entity)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.removeAll</th>
            <th class="desc">remove specific entities from an area</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.removeAll(entity_class, location, radius)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.setSilent</th>
            <th class="desc">true sets an entity silent</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.setSilent(entity, boolean)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.mount</th>
            <th class="desc">lets an entity ride another entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.mount(entity, mount_entity)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.unmount</th>
            <th class="desc">unmounts an entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.unmount(entity)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.getMount</th>
            <th class="desc">returns the mount of an entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.getMount(entity)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.getPassengers</th>
            <th class="desc">returns a list of passengers of an entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.getPassengers(entity)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.isWet</th>
            <th class="desc">returns true if an entity is wet</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.isWet(entity)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.isBurning</th>
            <th class="desc">returns true if an entity burns</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.isBurning(entity)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.setBurning</th>
            <th class="desc">sets an entity on fire</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.setBurning(entity, ticks)</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>0 ticks extinguish the entity</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.setNoPickup</th>
            <th class="desc">sets an arrow_entity not pickupable</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.setNoPickup(arrow_entity)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.get</th>
            <th class="desc">returns the next entity to a location or null</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.get(location, radius, entity_class)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">entity.spawn</th>
            <th class="desc">spawns an entity and returns it</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.spawn(location, <a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/entity/EntityType.html" target="_blank">type</a>)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.setGravity</th>
            <th class="desc">toggles the gravity of an entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.setGravity(entity, boolean)</td>
        </tr>
	</table>
	<table>
        <tr>
            <th class="command">entity.setGrowingAge</th>
            <th class="desc">sets the growing age of an entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.setGrowingAge(entity, age_int)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.getPotionType</th>
            <th class="desc">returns the itemstack of a thrown potion</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.getPotionType(potion_entity)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.near</th>
            <th class="desc">returns a list with all entities within a location / a radius of an entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.near(location / entity, radius)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.getLook</th>
            <th class="desc">returns the look direction as array</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.getLook(entity)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.setLook</th>
            <th class="desc">sets the look of an entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.setLook(entity, x, y, z)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">entity.getMotion</th>
            <th class="desc">returns the motion as array</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.getMotion(entity)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.setMotion</th>
            <th class="desc">sets the motion of an entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.setMotion(entity, x, y, z)</td>
        </tr>
        <tr>
            <td class="bold">Info</td>
            <td>x/y/z is clamped in the interval from -3.9 to 3.9 by Minecraft</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.frame.spawn</th>
            <th class="desc">spawns an itemframe with an itemstack</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.frame.spawn(location, <a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/block/BlockFace.html" target="_blank">block_face</a>, itemstack)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">entity.frame.getItem</th>
            <th class="desc">returns the itemstack of an itemframe</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.frame.getItem(entity_frame)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">entity.frame.hide</th>
            <th class="desc">hides an itemframe</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.frame.hide(entity_frame)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">entity.frame.show</th>
            <th class="desc">shows an itemframe</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.frame.show(entity_frame)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">entity.frame.setFixed</th>
            <th class="desc">sets the fixed tag for an itemframe</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>entity.frame.setFixed(entity_frame, boolean)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">creeper.explode</th>
            <th class="desc">lets a creeper explode</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>creeper.explode(entity)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">sheep.isSheared</th>
            <th class="desc">returns true if a sheep is sheared</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>sheep.isSheared(entity)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">sheep.getColor</th>
            <th class="desc">returns the color of a sheep as string</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>sheep.getColor(entity)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">pet.isTamed</th>
            <th class="desc">returns true if a pet is tamed</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>pet.isTamed(tameable_entity)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">pet.setTamed</th>
            <th class="desc">sets tame state for a tameable entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>pet.setTamed(tameable_entity, boolean, [owner])</td>
        </tr>
		<tr>
            <td class="bold">Example</td>
            <td>
				pet.setTamed(horse, true)<br>
				pet.setTamed(horse, false)<br>
				pet.setTamed(horse, true, player)<br>
				pet.setTamed(horse, false, player)<br>
			</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">pet.getOwner</th>
            <th class="desc">returns the owner of a pet</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>pet.getOwner(tameable_entity)</td>
        </tr>
    </table>
</section>

<section id="Living">
    <table>
        <tr>
            <th class="command">living.setHealth</th>
            <th class="desc">sets the health points of a living entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>living.setHealth(living_entity, amount)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">living.getHealth</th>
            <th class="desc">returns the health points of a living entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>living.getHealth(living_entity)</td>
        </tr>
	</table>
	<table>
        <tr>
            <th class="command">living.damage</th>
            <th class="desc">damages a living entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>living.damage(living_entity, damage_amount, damagesource)</td>
        </tr>
		<tr>
            <td class="bold">Info</td>
            <td>triggers events on the next server tick</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">living.heal</th>
            <th class="desc">heals a living entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>living.heal(living_entity, heal_amount)</td>
        </tr>
		<tr>
            <td class="bold">Info</td>
            <td>triggers events on the next server tick</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">living.setEquip</th>
            <th class="desc">sets the equipment of a living entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>living.setEquip(living_entity, <a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/inventory/EquipmentSlot.html" target="_blank">slot</a>, itemstack)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">living.getEquip</th>
            <th class="desc">returns the equipment of a living_entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>living.getEquip(living_entity, <a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/inventory/EquipmentSlot.html" target="_blank">slot</a>)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">living.near</th>
            <th class="desc">returns a list with all living entities within a location / a radius of a living entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>living.near(location / living_entity, radius)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">living.setAi</th>
            <th class="desc">sets if the AI of an entity is active</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>living.setAi(living_entity, boolean)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">generic living commands</th>
            <th class="desc">commands for living properties</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>
				living.get...(living_entity)<br>
				living.set...(living_entity, value)<br>
				living.reset...(living_entity)
			</td>
        </tr>
        <tr>
            <td class="bold">Properties</td>
            <td><a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/attribute/Attribute.html" target="_blank">attributes</a> without "GENERIC" and "_"</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">living.shootProjectile</th>
            <th class="desc">returns the shooten entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>living.shootProjectile(living_entity, entity_class)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">living.setInvisible</th>
            <th class="desc">sets a living_entity (in)visible</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>living.setInvisible(living_entity, boolean)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">living.addEffect</th>
            <th class="desc">adds an effect to a living_entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>living.addEffect(living_entity, <a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/potion/PotionEffectType.html" target="_blank">effect</a>, ticks, amplifier, [particle | true])</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>amplifier 0 means potion level 1</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">living.clearEffects</th>
            <th class="desc">removes all effects from a living entity</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>living.clearEffects(living_entity)</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">living.getEffectAmplifier</th>
            <th class="desc">returns the amplifier (effect level), -1 if not existing</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>living.getEffectAmplifier(entity, <a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/potion/PotionEffectType.html" target="_blank">effect</a>)</td>
        </tr>
    </table>
</section>

<section id="Particle">
	<table>
        <tr>
            <th class="command">particle.get</th>
            <th class="desc">returns a particle</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>particle.get(<a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/Particle.html" target="_blank">name</a>)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">particle.getAll</th>
            <th class="desc">returns an array of all particles</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>particle.getAll()</td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="command">particle.spawn</th>
            <th class="desc">spawns a particle</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>particle.spawn(location, particle, [count | 1], [speed | 0.0], [offX | 0.0], [offY | 0.0], [offZ | 0.0])</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">particle.spawnPlayer</th>
            <th class="desc">spawns a particle</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>particle.spawnPlayer(location, particle, player, [count | 1], [speed | 0.0], [offX | 0.0], [offY | 0.0], [offZ | 0.0])</td>
        </tr>
    </table>
</section>

<section id="Sound">
	<table>
        <tr>
            <th class="command">sound.get</th>
            <th class="desc">returns a sound</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>sound.get(<a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/Sound.html" target="_blank">name</a>)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">sound.getCategory</th>
            <th class="desc">returns a sound category</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>sound.getCategory(<a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/SoundCategory.html" target="_blank">name</a>)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">sound.spawn</th>
            <th class="desc">plays a sound</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>sound.spawn(location, sound, sound_category, [volume | 1.0], [pitch | random from 0.9 to 1.0])</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">sound.spawnForPlayer</th>
            <th class="desc">plays a sound for a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>sound.spawnForPlayer(player, sound, sound_category, [volume | 1.0], [pitch | random from 0.9 to 1.0])</td>
        </tr>
    </table>
</section>

<section id="Shop">
	<table>
        <tr>
            <th class="command">shop.new</th>
            <th class="desc">returns a new shop</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>shop.new(text)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">shop.addOffer</th>
            <th class="desc">adds an offer to a shop</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>shop.addOffer(shop, buy_item, sell_item, max_uses)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">shop.addDoubleOffer</th>
            <th class="desc">adds a double offer to a shop</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>shop.addDoubleOffer(shop, buy_item_1, buy_item_2, sell_item, max_uses)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">shop.open</th>
            <th class="desc">shows a shop to a player</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>shop.open(shop, player)</td>
        </tr>
    </table>
</section>

<section id="Boss">
	<table>
        <tr>
            <th class="command">boss.create</th>
            <th class="desc">returns a bossbar</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>boss.create(title, color, barstyle)</td>
        </tr>
		<tr>
            <td class="bold">Arguments</td>
            <td>
				title as string<br>
				<a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/boss/BarColor.html" target="_blank">color</a> as string<br>
				<a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/boss/BarStyle.html" target="_blank">barstyle</a> as string
			</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">boss.addPlayer</th>
            <th class="desc">add a player to the bossbar</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>boss.addPlayer(bossbar, player)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">boss.removePlayer</th>
            <th class="desc">remove a player from the bossbar</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>boss.removePlayer(bossbar, player)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">boss.removeAll</th>
            <th class="desc">remove all players from the bossbar</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>boss.removeAll(bossbar)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">boss.addFlag</th>
            <th class="desc">adds a flag to the bossbar</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>boss.addFlag(bossbar, flag)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td><a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/boss/BarFlag.html" target="_blank">flag</a> as string</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">boss.removeFlag</th>
            <th class="desc">removes a flag from the bossbar</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>boss.removeFlag(bossbar, flag)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td><a href="https://papermc.io/javadocs/paper/1.20/org/bukkit/boss/BarFlag.html" target="_blank">flag</a> as string</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">boss.setTitle</th>
            <th class="desc">sets the title for the bossbar</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>boss.setTitle(bossbar, string)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">boss.setProgress</th>
            <th class="desc">sets the progress of the bossbar</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>boss.setProgress(bossbar, double)</td>
        </tr>
        <tr>
            <td class="bold">Arguments</td>
            <td>double from 0 to 1</td>
        </tr>
    </table>
</section>

<section id="Whitelist">
	<table>
        <tr>
            <th class="command">whitelist.enable</th>
            <th class="desc">enables the whitelist</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>whitelist.enable()</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">whitelist.disable</th>
            <th class="desc">disables the whitelist</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>whitelist.disable()</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">whitelist.add</th>
            <th class="desc">adds a player to the whitelist</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>whitelist.add(uuid / uuid_string / player)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">whitelist.remove</th>
            <th class="desc">removes a player from the whitelist</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>whitelist.remove(uuid / uuid_string / player)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">whitelist.clear</th>
            <th class="desc">clears the whitelist</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>whitelist.clear()</td>
        </tr>
    </table>
</section>

<section id="Armorstand">
	<table>
        <tr>
            <th class="command">as.getBodyPose</th>
            <th class="desc">returns the body pose of an armor stand</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.getBodyPose(armor_stand)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.getHeadPose</th>
            <th class="desc">returns the head pose of an armor stand</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.getHeadPose(armor_stand)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.getLeftArmPose</th>
            <th class="desc">returns the left arm pose of an armor stand</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.getLeftArmPose(armor_stand)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.getRightArmPose</th>
            <th class="desc">returns the right arm pose of an armor stand</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.getRightArmPose(armor_stand)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.getLeftLegPose</th>
            <th class="desc">returns the left leg pose of an armor stand</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.getLeftLegPose(armor_stand)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.getRightLegPose</th>
            <th class="desc">returns the right leg pose of an armor stand</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.getRightLegPose(armor_stand)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.hasArms</th>
            <th class="desc">returns true if an armor stand has arms</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.hasArms(armor_stand)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.hasBasePlate</th>
            <th class="desc">returns true if an armor stand has a base plate</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.hasBasePlate(armor_stand)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.isMarker</th>
            <th class="desc">returns true if an armor stand is a marker</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.isMarker(armor_stand)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.isSmall</th>
            <th class="desc">returns true if an armor stand is small</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.isSmall(armor_stand)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.setArms</th>
            <th class="desc">sets that an armor stand can have arms</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.setArms(armor_stand, boolean)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.setBasePlate</th>
            <th class="desc">sets that an armor stand can have a base plate</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.setBasePlate(armor_stand, boolean)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.setMarker</th>
            <th class="desc">sets that an armor stand can be a marker</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.setMarker(armor_stand, boolean)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.setSmall</th>
            <th class="desc">sets that an armor stand is small</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.setSmall(armor_stand, boolean)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.canMove</th>
            <th class="desc">sets that an armor stand can move</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.canMove(armor_stand, boolean)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.canTick</th>
            <th class="desc">sets that an armor stand can tick</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.canTick(armor_stand, boolean)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.setBodyPose</th>
            <th class="desc">sets the body pose of an armor stand</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.setBodyPose(armor_stand, euler_angle)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.setHeadPose</th>
            <th class="desc">sets the head pose of an armor stand</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.setHeadPose(armor_stand, euler_angle)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.setLeftArmPose</th>
            <th class="desc">sets the left arm pose of an armor stand</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.setLeftArmPose(armor_stand, euler_angle)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.setRightArmPose</th>
            <th class="desc">sets the right arm pose of an armor stand</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.setRightArmPose(armor_stand, euler_angle)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.setLeftLegPose</th>
            <th class="desc">sets the left leg pose of an armor stand</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.setLeftLegPose(armor_stand, euler_angle)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">as.setRightLegPose</th>
            <th class="desc">sets the right leg pose of an armor stand</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>as.setRightLegPose(armor_stand, euler_angle)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">euler.new</th>
            <th class="desc">returns a new created euler angle</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>euler.new(x, y, z)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">euler.getX</th>
            <th class="desc">returns the x angle of an euler angle</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>euler.getX(euler_angle)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">euler.getY</th>
            <th class="desc">returns the y angle of an euler angle</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>euler.getY(euler_angle)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">euler.getZ</th>
            <th class="desc">returns the z angle of an euler angle</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>euler.getZ(euler_angle)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">euler.setX</th>
            <th class="desc">sets the x angle of an euler angle</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>euler.setX(euler_angle, value)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">euler.setY</th>
            <th class="desc">sets the y angle of an euler angle</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>euler.setY(euler_angle, value)</td>
        </tr>
    </table>
	<table>
        <tr>
            <th class="command">euler.setZ</th>
            <th class="desc">sets the z angle of an euler angle</th>
        </tr>
        <tr>
            <td class="bold">Format</td>
            <td>euler.setZ(euler_angle, value)</td>
        </tr>
    </table>
</section>