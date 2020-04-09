# Use the `!empty()` function rather than  `isset()`
**Le langage PHP est un langage typé !** Certe faiblement, puisque le typage n'intervient que pour des tâches de bas niveau.<br>
La fonction `isset()` est toujours vraie sauf pour `NULL`, elle ne sert donc à rien !<br>
En revanche, `!empty()` réagit de la même manière qu'une condition ordinaire et permet de ne pas avoir d'erreur :

[Lien vers le code d'exemple PHP](example.php)

Test sur **`int(0)`**<br>
Condition ordinaire : **`false`**<br>
!empty() : **`false`** ✅<br>
isset() : **`true`** ❌<br>

Test sur **`string(1) "0"`**<br>
Condition ordinaire : **`false`**<br>
!empty() : **`false`** ✅<br>
isset() : **`true`** ❌<br>

Test sur **`bool(false)`**<br>
Condition ordinaire : **`false`**<br>
!empty() : **`false`** ✅<br>
isset() : **`true`** ❌<br>

Test sur **`string(5) "false"`**<br>
Condition ordinaire : **`true`**<br>
!empty() : **`true`** ✅<br>
isset() : **`true`** ✅<br>

Test sur **`int(1)`**<br>
Condition ordinaire : **`true`**<br>
!empty() : **`true`** ✅<br>
isset() : **`true`** ✅<br>

Test sur **`string(1) "1"`**<br>
Condition ordinaire : **`true`**<br>
!empty() : **`true`** ✅<br>
isset() : **`true`** ✅<br>

Test sur **`bool(true)`**<br>
Condition ordinaire : **`true`**<br>
!empty() : **`true`** ✅<br>
isset() : **`true`** ✅<br>

Test sur **`string(4) "true"`**<br>
Condition ordinaire : **`true`**<br>
!empty() : **`true`** ✅<br>
isset() : **`true`** ✅<br>

Test sur **`NULL`**<br>
Condition ordinaire : **`false`**<br>
!empty() : **`false`** ✅<br>
isset() : **`false`** ✅<br>

Test sur **`string(4) "null"`**<br>
Condition ordinaire : **`true`**<br>
!empty() : **`true`** ✅<br>
isset() : **`true`** ✅<br>
