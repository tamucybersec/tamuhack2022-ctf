# Mr. Robot
## Description
I heard that google likes to use robots to index webpages.

Challenge link is at (localhost:80)[localhost:80].

## Solution
Note: I ran the challenge offline, so mentally replace `localhost` with whatever the provided URL is.

The challenge mentions robots, so we should look under `localhost/robots.txt` (`robots.txt` contains instructions for web scrapers to only examine portions of a website). We see:
```
User-agent: *
Disallow: not_so_secret.html
```
This is politely asking web scrapers to not look at `localhost/not_so_secret.html`, so let's go there. The page contains the flag.

Flag: `gigem{c3rT1f13D_w3b_ScR4p3r}`

## Developer Notes
Run `make` to start up the container on port 80. For cleanup, run `make stop`.
