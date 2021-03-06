<?php

// Start of gettext v.

/**
 * Sets the default domain
 * @link https://php.net/manual/en/function.textdomain.php
 * @param string $text_domain <p>
 * The new message domain, or <b>NULL</b> to get the current setting without
 * changing it
 * </p>
 * @return string If successful, this function returns the current message
 * domain, after possibly changing it.
 * @since 4.0
 * @since 5.0
 */
function textdomain (string $text_domain) {}

/**
 * Lookup a message in the current domain
 * @link https://php.net/manual/en/function.gettext.php
 * @param string $message <p>
 * The message being translated.
 * </p>
 * @return string a translated string if one is found in the
 * translation table, or the submitted message if not found.
 * @since 4.0
 * @since 5.0
 */
function gettext (string $message) {}

/**
 * Lookup a message in the current domain
 * @link https://php.net/manual/en/function.gettext.php
 * @param string $message <p>
 * The message being translated.
 * </p>
 * @return string a translated string if one is found in the
 * translation table, or the submitted message if not found.
 * @since 4.0
 * @since 5.0
 */
function _ (string $message) {}

/**
 * Override the current domain
 * @link https://php.net/manual/en/function.dgettext.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $message <p>
 * The message
 * </p>
 * @return string A string on success.
 * @since 4.0
 * @since 5.0
 */
function dgettext (string $domain, string $message) {}

/**
 * Overrides the domain for a single lookup
 * @link https://php.net/manual/en/function.dcgettext.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $message <p>
 * The message
 * </p>
 * @param int $category <p>
 * The category
 * </p>
 * @return string A string on success.
 * @since 4.0
 * @since 5.0
 */
function dcgettext (string $domain, string $message, int $category) {}

/**
 * Sets the path for a domain
 * @link https://php.net/manual/en/function.bindtextdomain.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $directory <p>
 * The directory path
 * </p>
 * @return string The full pathname for the <i>domain</i> currently being set.
 * @since 4.0
 * @since 5.0
 */
function bindtextdomain (string $domain, string $directory) {}

/**
 * Plural version of gettext
 * @link https://php.net/manual/en/function.ngettext.php
 * @param string $msgid1
 * @param string $msgid2
 * @param int $n
 * @return string correct plural form of message identified by
 * <i>msgid1</i> and <i>msgid2</i>
 * for count <i>n</i>.
 * @since 4.2
 * @since 5.0
 */
function ngettext (string $msgid1, string $msgid2, int $n) {}

/**
 * Plural version of dgettext
 * @link https://php.net/manual/en/function.dngettext.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $msgid1
 * @param string $msgid2
 * @param int $n
 * @return string A string on success.
 * @since 4.2
 * @since 5.0
 */
function dngettext (string $domain, string $msgid1, string $msgid2, int $n) {}

/**
 * Plural version of dcgettext
 * @link https://php.net/manual/en/function.dcngettext.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $msgid1
 * @param string $msgid2
 * @param int $n
 * @param int $category
 * @return string A string on success.
 * @since 4.2
 * @since 5.0
 */
function dcngettext (string $domain, string $msgid1, string $msgid2, int $n, int $category) {}

/**
 * Specify the character encoding in which the messages from the DOMAIN message catalog will be returned
 * @link https://php.net/manual/en/function.bind-textdomain-codeset.php
 * @param string $domain <p>
 * The domain
 * </p>
 * @param string $codeset <p>
 * The code set
 * </p>
 * @return string A string on success.
 * @since 4.2
 * @since 5.0
 */
function bind_textdomain_codeset (string $domain, string $codeset) {}

// End of gettext v.
?>
