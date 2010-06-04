TweetMVC
========

**The Tweetable PHP MVC Framework.**

## What?

TweetMVC is a PHP MVC framework where each component (class, function, or statement) fits inside of a Tweet (140 characters). Why? I don't 
know&hellip; but doesn't it sound fun? I guess the point was to code an extensible, fully-functional MVC framework from scratch in a kind of 
code-golf-esque kind of way.

TweetMVC borrows on concepts of other PHP MVC frameworks, but everything is really small, barebones, and naturally obfuscated. I personally 
use the [Kohana PHP Framework](http://kohanaframework.org) at work and for my own projects, and I suspect that some of my inspiration and 
knowledge of framework internals used to create TweetMVC has come from working with Kohana.

## Why?

The idea originally came from [Fabien Potencier](http://fabien.potencier.org) and his [Twitto](http://twitto.org) framework. This was 
followed by [Phil Sturgeon](http://philsturgeon.co.uk) and his 
[Twiny](http://philsturgeon.co.uk/news/2009/12/Twiny-Framework-the-framework-small-enough-to-tweet) framework. Both are awesome,
little PHP scripts, but I wanted to create a tiny, fully-functional MVC framework. Therefore, I made TweetMVC.

Will TweetMVC ever be used for a production environment? It probably isn't the best idea to do so, but I'm sure going to try some experiments.

## Rules:

So, yeah, The entire framework does not fit in a tweet. Instead, it is a framework composed of tweetable pieces. I layed down some rules as I
was creating TweetMVC to govern how the framework was written.

- Write the code in such a way that it is as short as possible, but still produces a nice API
- Each component (class, function, or statement) must be no longer than 140 characters (the size of a Tweet)
- Fit as many components together as possible in one 140-character line
- E_NOTICE errors are ignored, so the code can take advantage of PHP oddities that might normally cause errors
- The first line of every file should contain:
    - The PHP opening tag (short tags are acceptable and encouraged)
    - Any namespace or use statements (if applicable)
    - Any constants relative to the namespace
    - A comment explaining the purpose of the file
- Comments should use the # symbol (it's the shortest) and any comments describing a line should begin at column 141
- Working statements causing warnings can use the @ operator to prevent the warning from being displayed
- Code does not need to be strictly PHP 5 or strictly object-oriented. Sometimes PHP 4 code can be shorter
- Short tags, eval, variable variables&hellip; these are all allowed if it can shorten the code
- These rules only apply to the framework code. Application code should be written cleanly and normally

## Requirements:

TweetMVC requires PHP 5.3 so that it can take advantage of newer PHP features that might allow for shorter code (shortcut ternaries, 
namespaces, lambdas/closures, etc.) TweetMVC also uses the MySQLi PHP extension for database support and the mod_rewrite Apache extension.
You should configure your PHP installation to allow short_tags as well.

## How to Install:

This repository is a submodule to [tweetmvc-app](http://github.com/tweetmvc/tweetmvc-app). You should clone that repository to begin
writing an app with TweetMVC. There is a README in that repository that covers the details about how to use TweetMVC.

## In the Works:

- Session/Cookie Extension
- Validation Extension
- Improved Security