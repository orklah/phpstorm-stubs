<?php
/**
 * Common Used Functions
 */

/**
 * Get cached data by specified name
 *
 * @param string $name Key name
 * @return mixed
 */
function xcache_get(string $name) {}

/**
 * Store data to cache by specified name
 *
 * @param string $name Key name
 * @param mixed $value Value to store
 * @param int $ttl TTL in seconds
 * @return bool TRUE on success, FALSE otherwise
 */
function xcache_set(string $name, $value, int $ttl = 0) {}

/**
 * Check if an entry exists in cache by specified name
 *
 * @param string $name Key name
 * @return bool TRUE if key exists, FALSE otherwise
 */
function xcache_isset(string $name) {}

/**
 * Unset existing data in cache by specified name
 *
 * @param string $name Key name
 * @return bool
 */
function xcache_unset(string $name) {}

/**
 * Unset existing data in cache by specified prefix
 *
 * @param string $prefix Keys' prefix
 * @return bool
 */
function xcache_unset_by_prefix(string $prefix) {}

/**
 * Increase an int counter in cache by specified name, create it if not exists
 *
 * @param string $name
 * @param mixed $value
 * @param int $ttl
 * @return int
 */
function xcache_inc(string $name, $value = 1, int $ttl = 0) {}

/**
 * Decrease an int counter in cache by specified name, create it if not exists
 *
 * @param string $name
 * @param mixed $value
 * @param int $ttl
 * @return int
 */
function xcache_dec(string $name, $value = 1, int $ttl = 0) {}

/**
 * Administrator Functions
 */

/**
 * Return count of cache on specified cache type
 *
 * @param int $type
 * @return int
 */
function xcache_count(int $type) {}

/**
 * Get cache info by id on specified cache type
 *
 * @param int $type
 * @param int $id
 * @return array
 */
function xcache_info(int $type, int $id) {}

/**
 * Get cache entries list by id on specified cache type
 *
 * @param int $type
 * @param int $id
 * @return array
 */
function xcache_list(int $type, int $id) {}

/**
 * Clear cache by id on specified cache type
 *
 * @param int $type
 * @param int $id
 * @return void
 */
function xcache_clear_cache(int $type, int $id = -1) {}

/**
 * @param int $op_type
 * @return string
 */
function xcache_coredump(int $op_type) {}

/**
 * Coverager Functions
 */

/**
 * @param string $data
 * @return array
 */
function xcache_coverager_decode(string $data) {}

/**
 * @param bool $clean
 * @return void
 */
function xcache_coverager_start(bool $clean = true) {}

/**
 * @param bool $clean
 * @return void
 */
function xcache_coverager_stop(bool $clean = false) {}

/**
 * @param bool $clean
 * @return array
 */
function xcache_coverager_get(bool $clean = false) {}

/**
 * Opcode Functions
 */

/**
 * @param string $filename
 * @return string
 */
function xcache_asm(string $filename) {}

/**
 * Disassemble file into opcode array by filename
 *
 * @param string $filename
 * @return string
 */
function xcache_dasm_file(string $filename) {}

/**
 * Disassemble php code into opcode array
 *
 * @param string $code
 * @return string
 */
function xcache_dasm_string(string $code) {}

/**
 * Encode php file into XCache opcode encoded format
 *
 * @param string $filename
 * @return string
 */
function xcache_encode(string $filename) {}

/**
 * Decode(load) opcode from XCache encoded format file
 *
 * @param string $filename
 * @return bool
 */
function xcache_decode(string $filename) {}

/**
 * @param int $op_type
 * @return string
 */
function xcache_get_op_type(int $op_type) {}

/**
 * @param int $type
 * @return string
 */
function xcache_get_data_type(int $type) {}

/**
 * @param int $opcode
 * @return string
 */
function xcache_get_opcode(int $opcode) {}

/**
 * @param int $op_type
 * @return string
 */
function xcache_get_op_spec(int $op_type) {}

/**
 * @param int $opcode
 * @return string
 */
function xcache_get_opcode_spec(int $opcode) {}

/**
 * @param string $name
 * @return string
 */
function xcache_is_autoglobal(string $name) {}