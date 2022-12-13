# everyonesanadmin
WordPress plugin that makes every site visitor the admin. Obviously only good for local development

Just activate it, and you'll never need to log in again.

For local development, I like to place the php file in wp-content/mu-plugins/ so it's always active, even after restoring to a DB backup. If you need to temporarily disable it, just put `return;` at the start of the file.
