<?php
class PDFlib
{
	/**
	 * Activates a previously created structure element or other content item.
	 * @param $id
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-activate-item.php
	 */
	function activate_item($id){}

	/**
	 * Adds a link to a web resource.
	 * @param float $llx
	 * @param float $lly
	 * @param float $urx
	 * @param float $ury
	 * @param string $filename
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-add-launchlink.php
	 *
	 * @deprecated This function is deprecated since PDFlib version 6, use PDF_create_action() with type=Launch and PDF_create_annotation() with type=Link instead.
	 */
	function add_launchlink(float $llx, float $lly, float $urx, float $ury, string $filename){}

	/**
	 * Add a link annotation to a target within the current PDF file.
	 *
	 * @param float $lowerleftx
	 * @param float $lowerlefty
	 * @param float $upperrightx
	 * @param float $upperrighty
	 * @param int $page
	 * @param string $dest
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-add-locallink.php
	 *
	 * @deprecated This function is deprecated since PDFlib version 6, use PDF_create_action() with type=GoTo and PDF_create_annotation() with type=Link instead.
	 */
	function add_locallink(float $lowerleftx, float $lowerlefty, float $upperrightx, float $upperrighty, int $page, string $dest){}

	/**
	 * Creates a named destination on an arbitrary page in the current document.
	 *
	 * @param string $name
	 * @param string $optlist
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-add-nameddest.php
	 */
	function add_nameddest(string $name, string $optlist){}

	/**
	 * Sets an annotation for the current page.
	 *
	 * @param float $llx
	 * @param float $lly
	 * @param float $urx
	 * @param float $ury
	 * @param string $contents
	 * @param string $title
	 * @param string $icon
	 * @param int $open
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-add-note.php
	 *
	 * @deprecated This function is deprecated since PDFlib version 6, use PDF_create_annotation() with type=Text instead.
	 */
	function add_note(float $llx, float $lly, float $urx, float $ury, string $contents, string $title, string $icon, int $open){}

	/**
	 * Add a file link annotation to a PDF target.
	 *
	 * @param float $bottom_left_x
	 * @param float $bottom_left_y
	 * @param float $up_right_x
	 * @param float $up_right_y
	 * @param string $filename
	 * @param int $page
	 * @param string $dest
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-add-pdflink.php
	 *
	 * @deprecated This function is deprecated since PDFlib version 6, use PDF_create_action() with type=GoToR and PDF_create_annotation() with type=Link instead.
	 */
	function add_pdflink(float $bottom_left_x, float $bottom_left_y, float $up_right_x, float $up_right_y, string $filename, int $page, string $dest){}

	/**
	 * Adds a cell to a new or existing table.
	 *
	 * @param int $table
	 * @param int $column
	 * @param int $row
	 * @param string $text
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-add-table-cell.php
	 */
	function add_table_cell(int $table, int $column, int $row, string $text, string $optlist){}

	/**
	 * Creates a Textflow object, or adds text and explicit options to an existing Textflow.
	 *
	 * @param int $textflow
	 * @param string $text
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-add-textflow.php
	 */
	function add_textflow(int $textflow, string $text, string $optlist){}

	/**
	 * Adds an existing image as thumbnail for the current page.
	 *
	 * @param int $image
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-add-thumbnail.php
	 */
	function add_thumbnail(int $image){}

	/**
	 * Adds a weblink annotation to a target url on the Web.
	 *
	 * @param float $lowerleftx
	 * @param float $lowerlefty
	 * @param float $upperrightx
	 * @param float $upperrighty
	 * @param string $url
	 *
	 * @return bool
	 *
	 * @deprecated This function is deprecated since PDFlib version 6, use PDF_create_action() with type=URI and PDF_create_annotation() with type=Link instead.
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-add-weblink.php
	 */
	function add_weblink(float $lowerleftx, float $lowerlefty, float $upperrightx, float $upperrighty, string $url){}

	/**
	 * Adds a counterclockwise circular arc
	 *
	 * @param float $x
	 * @param float $y
	 * @param float $r
	 * @param float $alpha
	 * @param float $beta
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-arc.php
	 */
	function arc(float $x, float $y, float $r, float $alpha, float $beta){}

	/**
	 * Except for the drawing direction, this function behaves exactly like PDF_arc().
	 *
	 * @param float $x
	 * @param float $y
	 * @param float $r
	 * @param float $alpha
	 * @param float $beta
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-arcn.php
	 */
	function arcn(float $x, float $y, float $r, float $alpha, float $beta){}

	/**
	 * Adds a file attachment annotation.
	 *
	 * @param float $llx
	 * @param float $lly
	 * @param float $urx
	 * @param float $ury
	 * @param string $filename
	 * @param string $description
	 * @param string $author
	 * @param string $mimetype
	 * @param string $icon
	 *
	 * @return bool
	 *
	 * @deprecated This function is deprecated since PDFlib version 6, use PDF_create_annotation() with type=FileAttachment instead.
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-attach-file.php
	 */
	function attach_file(float $llx, float $lly, float $urx, float $ury, string $filename, string $description, string $author, string $mimetype, string $icon){}

	/**
	 * Creates a new PDF file subject to various options.
	 *
	 * @param string $filename
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-begin-document.php
	 * @link https://www.pdflib.com/fileadmin/pdflib/pdf/manuals/PDFlib-9.1.2-API-reference.pdf
	 */
	function begin_document(string $filename, string $optlist){}

	/**
	 * Starts a Type 3 font definition.
	 *
	 * @param string $filename
	 * @param float $a
	 * @param float $b
	 * @param float $c
	 * @param float $d
	 * @param float $e
	 * @param float $f
	 * @param string $optlist
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-begin-font.php
	 */
	function begin_font(string $filename, float $a, float $b, float $c, float $d, float $e, float $f, string $optlist){}

	/**
	 * Starts a glyph definition for a Type 3 font.
	 *
	 * @param string $glyphname
	 * @param float $wx
	 * @param float $llx
	 * @param float $lly
	 * @param float $urx
	 * @param float $ury
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-begin-glyph.php
	 */
	function begin_glyph(string $glyphname, float $wx, float $llx, float $lly, float $urx, float $ury){}

	/**
	 * Opens a structure element or other content item with attributes supplied as options.
	 *
	 * @param string $tag
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-begin-item.php
	 */
	function begin_item(string $tag, string $optlist){}

	/**
	 * Starts a layer for subsequent output on the page.
	 *
	 * @param int $layer
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-begin-layer.php
	 */
	function begin_layer(int $layer){}

	/**
	 * Adds a new page to the document, and specifies various options. The parameters width and height are the dimensions of the new page in points.
	 *
	 * @param float $width
	 * @param float $height
	 * @param string $optlist
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-begin-page-ext.php
	 */
	function begin_page_ext(float $width, float $height, string $optlist){}


	/**
	 * Adds a new page to the document.
	 *
	 * @param float $width
	 * @param float $height
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-begin-page.php
	 *
	 * @deprecated This function is deprecated since PDFlib version 6, use PDF_begin_page_ext() instead.
	 */
	function begin_page(float $width, float $height){}

	/**
	 * Starts a new pattern definition.
	 *
	 * @param float $width
	 * @param float $height
	 * @param float $xstep
	 * @param float $ystep
	 * @param int $painttype
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-begin-pattern.php
	 */
	function begin_pattern(float $width, float $height, float $xstep, float $ystep, int $painttype){}

	/**
	 * Starts a new template definition.
	 *
	 * @param float $width
	 * @param float $height
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-begin-template-ext.php
	 */
	function begin_template_ext(float $width, float $height, string $optlist){}

	/**
	 * @param float $width
	 * @param float $height
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-begin-template.php
	 *
	 * @deprecated This function is deprecated since PDFlib version 7, use PDF_begin_template_ext() instead.
	 */
	function begin_template(float $width, float $height){}

	/**
	 * @param float $x
	 * @param float $y
	 * @param float $r
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-circle.php
	 */
	function circle(float $x, float $y, float $r){}

	/**
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-clip.php
	 */
	function clip(){}

	/**
	 * @param int $image
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-close-image.php
	 */
	function close_image(int $image){}

	/**
	 * Closes the page handle, and frees all page-related resources
	 *
	 * @param int $page
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-close-pdi-page.php
	 */
	function close_pdi_page(int $page){}

	/**
	 * @param int $doc
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-close-pdi.php
	 *
	 * @deprecated This function is deprecated since PDFlib version 7, use PDF_close_pdi_document() instead.
	 */
	function close_pdi(int $doc){}

	/**
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-close.php
	 *
	 * @deprecated This function is deprecated since PDFlib version 6, use PDF_end_document() instead.
	 */
	function close(){}

	/**
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-closepath-fill-stroke.php
	 */
	function closepath_fill_stroke(){}

	/**
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-closepath-stroke.php
	 */
	function closepath_stroke(){}

	/**
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-closepath.php
	 */
	function closepath(){}

	/**
	 * @param float $a
	 * @param float $b
	 * @param float $c
	 * @param float $d
	 * @param float $e
	 * @param float $f
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-concat.php
	 */
	function concat(float $a, float $b, float $c, float $d, float $e, float $f){}

	/**
	 * @param string $text
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-continue-text.php
	 */
	function continue_text(string $text){}

	/**
	 * @param string $username
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-create-3dview.php
	 */
	function create_3dview(string $username, string $optlist){}

	/**
	 * @param string $type
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-create-action.php
	 */
	function create_action(string $type, string $optlist){}

	/**
	 * @param float $llx
	 * @param float $lly
	 * @param float $urx
	 * @param float $ury
	 * @param string $type
	 * @param string $optlist
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-create-annotation.php
	 */
	function create_annotation(float $llx, float $lly, float $urx, float $ury, string $type, string $optlist){}

	/**
	 * @param string $text
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-create-bookmark.php
	 */
	function create_bookmark(string $text, string $optlist){}

	/**
	 * @param float $llx
	 * @param float $lly
	 * @param float $urx
	 * @param float $ury
	 * @param string $name
	 * @param string $type
	 * @param string $optlist
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-create-field.php
	 */
	function create_field(float $llx, float $lly, float $urx, float $ury, string $name, string $type, string $optlist){}

	/**
	 * @param string $name
	 * @param string $optlist
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-create-fieldgroup.php
	 */
	function create_fieldgroup(string $name, string $optlist){}

	/**
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-create-gstate.php
	 */
	function create_gstate(string $optlist){}

	/**
	 * @param string $filename
	 * @param string $data
	 * @param string $optlist
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-create-pvf.php
	 */
	function create_pvf(string $filename, string $data, string $optlist){}

	/**
	 * @param string $text
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-create-textflow.php
	 */
	function create_textflow(string $text, string $optlist){}

	/**
	 * @param float $x1
	 * @param float $y1
	 * @param float $x2
	 * @param float $y2
	 * @param float $x3
	 * @param float $y3
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-curveto.php
	 */
	function curveto(float $x1, float $y1, float $x2, float $y2, float $x3, float $y3){}

	/**
	 * @param string $name
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-define-layer.php
	 */
	function define_layer(string $name, string $optlist){}

	/**
	 * @param string $filename
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-delete-pvf.php
	 */
	function delete_pvf(string $filename){}

	/**
	 * @param int $table
	 * @param string $optlist
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-delete-table.php
	 */
	function delete_table(int $table, string $optlist){}

	/**
	 * @param int $textflow
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-delete-textflow.php
	 */
	function delete_textflow(int $textflow){}

	/**
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-delete.php
	 */
	function delete(){}

	/**
	 * @param string $encoding
	 * @param int $slot
	 * @param string $glyphname
	 * @param int $uv
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-encoding-set-char.php
	 */
	function encoding_set_char(string $encoding, int $slot, string $glyphname, int $uv){}

	/**
	 * @param string $optlist
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-end-document.php
	 */
	function end_document(string $optlist){}

	/**
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-end-font.php
	 */
	function end_font(){}

	/**
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-end-glyph.php
	 */
	function end_glyph(){}

	/**
	 * @param int $id
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-end-item.php
	 */
	function end_item(int $id){}

	/**
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-end-layer.php
	 */
	function end_layer(){}

	/**
	 * @param string $optlist
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-end-page-ext.php
	 */
	function end_page_ext(string $optlist){}

	/**
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-end-page.php
	 */
	function end_page($p){}

	/**
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-end-pattern.php
	 */
	function end_pattern($p){}

	/**
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-end-template.php
	 */
	function end_template($p){}

	/**
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-endpath.php
	 */
	function endpath($p){}

	/**
	 * @param int $page
	 * @param string $blockname
	 * @param int $image
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-fill-imageblock.php
	 */
	function fill_imageblock(int $page, string $blockname, int $image, string $optlist){}

	/**
	 * @param int $page
	 * @param string $blockname
	 * @param int $contents
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-fill-pdfblock.php
	 */
	function fill_pdfblock(int $page, string $blockname, int $contents, string $optlist){}

	/**
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-fill-stroke.php
	 */
	function fill_stroke(){}

	/**
	 * @param int $page
	 * @param string $blockname
	 * @param string $text
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-fill-textblock.php

	 */
	function fill_textblock(int $page, string $blockname, string $text, string $optlist){}

	/**
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-fill.php

	 */
	function fill(){}
	/**
	 * @param string $fontname
	 * @param string $encoding
	 * @param int $embed
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-findfont.php(Dep)

	 */
	function findfont(string $fontname , string $encoding , int $embed){}
	/**
	 * @param int $image
	 * @param float $x
	 * @param float $y
	 * @param string $optlist
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-fit-image.php

	 */
	function fit_image(int $image , float $x , float $y , string $optlist){}
	/**
	 * @param int $page
	 * @param float $x
	 * @param float $y
	 * @param string $optlist
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-fit-pdi-page.php

	 */
	function fit_pdi_page(int $page , float $x , float $y , string $optlist){}
	/**
	 * @param int $table
	 * @param float $llx
	 * @param float $lly
	 * @param float $urx
	 * @param float $ury
	 * @param string $optlist
	 *
	 * @return string
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-fit-table.php

	 */
	function fit_table(int $table , float $llx , float $lly , float $urx , float $ury , string $optlist){}
	/**
	 * @param int $textflow
	 * @param float $llx
	 * @param float $lly
	 * @param float $urx
	 * @param float $ury
	 * @param string $optlist
	 *
	 * @return string
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-fit-textflow.php

	 */
	function fit_textflow(int $textflow , float $llx , float $lly , float $urx , float $ury , string $optlist){}
	/**
	 * @param string $text
	 * @param float $x
	 * @param float $y
	 * @param string $optlist
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-fit-textline.php

	 */
	function fit_textline(string $text , float $x , float $y , string $optlist){}
	/**
	 *
	 * @return string
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-get-apiname.php

	 */
	function get_apiname(){}
	/**
	 *
	 * @return string
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-get-buffer.php

	 */
	function get_buffer(){}
	/**
	 *
	 * @return string
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-get-errmsg.php

	 */
	function get_errmsg(){}
	/**
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-get-errnum.php

	 */
	function get_errnum(){}
	/**
	 * @param void $
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-get-majorversion.php(dep)

	 */
	function get_majorversion(){}
	/**
	 * @param void $
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-get-minorversion.php(dep)

	 */
	function get_minorversion(){}
	/**
	 * @param string $key
	 * @param float $modifier
	 *
	 * @return string
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-get-parameter.php

	 */
	function get_parameter(string $key , float $modifier){}
	/**
	 * @param string $key
	 * @param int $doc
	 * @param int $page
	 * @param int $reserved
	 *
	 * @return string
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-get-pdi-parameter.php

	 */
	function get_pdi_parameter(string $key , int $doc , int $page , int $reserved){}
	/**
	 * @param string $key
	 * @param int $doc
	 * @param int $page
	 * @param int $reserved
	 *
	 * @return float
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-get-pdi-value.php

	 */
	function get_pdi_value(string $key , int $doc , int $page , int $reserved){}
	/**
	 * @param string $key
	 * @param float $modifier
	 *
	 * @return float
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-get-value.php

	 */
	function get_value(string $key , float $modifier){}
	/**
	 * @param int $font
	 * @param string $keyword
	 * @param string $optlist
	 *
	 * @return float
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-info-font.php

	 */
	function info_font(int $font , string $keyword , string $optlist){}
	/**
	 * @param string $boxname
	 * @param int $num
	 * @param string $keyword
	 *
	 * @return float
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-info-matchbox.php

	 */
	function info_matchbox(string $boxname , int $num , string $keyword){}
	/**
	 * @param int $table
	 * @param string $keyword
	 *
	 * @return float
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-info-table.php

	 */
	function info_table(int $table , string $keyword){}
	/**
	 * @param int $textflow
	 * @param string $keyword
	 *
	 * @return float
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-info-textflow.php

	 */
	function info_textflow(int $textflow , string $keyword){}

	/**
	 * @param string $text
	 * @param string $keyword
	 * @param string $optlist
	 *
	 * @return float
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-info-textline.php
	 */
	function info_textline(string $text , string $keyword , string $optlist){}

	/**
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-initgraphics.php
	 */
	function initgraphics(){}

	/**
	 * @param float $x
	 * @param float $y
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-lineto.php
	 */
	function lineto(float $x , float $y){}

	/**
	 * @param string $filename
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-load-3ddata.php
	 */
	function load_3ddata(string $filename , string $optlist){}

	/**
	 * @param string $fontname
	 * @param string $encoding
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-load-font.php
	 */
	function load_font(string $fontname , string $encoding , string $optlist){}

	/**
	 * @param string $profilename
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-load-iccprofile.php
	 */
	function load_iccprofile(string $profilename , string $optlist){}

	/**
	 * @param string $imagetype
	 * @param string $filename
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-load-image.php
	 */
	function load_image(string $imagetype , string $filename , string $optlist){}

	/**
	 * @param string $spotname
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-makespotcolor.php
	 */
	function makespotcolor(string $spotname){}

	/**
	 * @param float $x
	 * @param float $y
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-moveto.php
	 */
	function moveto(float $x , float $y){}

	/**
	 * @param string $filename
	 * @param int $width
	 * @param int $height
	 * @param int $BitReverse
	 * @param int $k
	 * @param int $Blackls1
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-open-ccitt.php(dep)
	 */
	function open_ccitt(string $filename , int $width , int $height , int $BitReverse , int $k , int $Blackls1){}

	/**
	 * @param string $filename
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-open-file.php(dep)
	 */
	function open_file(string $filename){}

	/**
	 * @param string $imagetype
	 * @param string $filename
	 * @param string $stringparam
	 * @param int $intparam
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-open-image-file.php(dep)
	 */
	function open_image_file(string $imagetype , string $filename , string $stringparam , int $intparam){}

	/**
	 * @param string $imagetype
	 * @param string $source
	 * @param string $data
	 * @param int $length
	 * @param int $width
	 * @param int $height
	 * @param int $components
	 * @param int $bpc
	 * @param string $params
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-open-image.php(dep)
	 */
	function open_image(string $imagetype , string $source , string $data , int $length , int $width , int $height , int $components , int $bpc , string $params){}

	/**
	 * @param resource $image
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-open-memory-image.php(not supported)
	 */
	function open_memory_image($image){}

	/**
	 * @param string $filename
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-open-pdi-document.php
	 */
	function open_pdi_document(string $filename , string $optlist){}

	/**
	 * @param int $doc
	 * @param int $pagenumber
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-open-pdi-page.php
	 */
	function open_pdi_page(int $doc , int $pagenumber , string $optlist){}

	/**
	 * @param string $filename
	 * @param string $optlist
	 * @param int $len
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-open-pdi.php
	 */
	function open_pdi(string $filename , string $optlist , int $len){}

	/**
	 * @param int $doc
	 * @param string $path
	 *
	 * @return float
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-pcos-get-number.php
	 */
	function pcos_get_number(int $doc , string $path){}

	/**
	 * @param int $doc
	 * @param string $optlist
	 * @param string $path
	 *
	 * @return string
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-pcos-get-stream.php
	 */
	function pcos_get_stream(int $doc, string $optlist, string $path){}

	/**
	 * @param int $doc
	 * @param string $path
	 *
	 * @return string
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-pcos-get-string.php
	 */
	function pcos_get_string(int $doc, string $path){}

	/**
	 * @param int $image
	 * @param float $x
	 * @param float $y
	 * @param float $scale
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-place-image.php (dep)
	 */
	function place_image(int $image, float $x, float $y, float $scale){}

	/**
	 * @param int $page
	 * @param float $x
	 * @param float $y
	 * @param float $sx
	 * @param float $sy
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-place-pdi-page.php (dep)
	 */
	function place_pdi_page(int $page, float $x, float $y, float $sx, float $sy){}

	/**
	 * @param int $doc
	 * @param int $page
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-process-pdi.php
	 */
	function process_pdi(int $doc, int $page, string $optlist){}

	/**
	 * @param float $x
	 * @param float $y
	 * @param float $width
	 * @param float $height
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-rect.php
	 */
	function rect(float $x, float $y, float $width, float $height){}

	/**
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-restore.php
	 */
	function restore($p){}

	/**
	 * @param string $optlist
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-resume-page.php
	 */
	function resume_page(string $optlist){}

	/**
	 * @param float $phi
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-rotate.php
	 */
	function rotate(float $phi){}

	/**
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-save.php
	 */
	function save($p){}

	/**
	 * @param float $sx
	 * @param float $sy
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-scale.php
	 */
	function scale(float $sx, float $sy){}

	/**
	 * @param float $red
	 * @param float $green
	 * @param float $blue
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-set-border-color.php (dep)
	 */
	function set_border_color(float $red, float $green, float $blue){}

	/**
	 * @param float $black
	 * @param float $white
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-set-border-dash.php (dep)
	 */
	function set_border_dash(float $black, float $white){}

	/**
	 * @param string $style
	 * @param float $width
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-set-border-style.php (dep)
	 */
	function set_border_style(string $style, float $width){}

	/**
	 * @param int $gstate
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-set-gstate.php
	 */
	function set_gstate(int $gstate){}

	/**
	 * @param string $key
	 * @param string $value
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-set-info.php
	 */
	function set_info(string $key, string $value){}

	/**
	 * @param string $type
	 * @param string $optlist
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-set-layer-dependency.php
	 */
	function set_layer_dependency(string $type, string $optlist){}

	/**
	 * @param string $key
	 * @param string $value
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-set-parameter.php
	 */
	function set_parameter(string $key, string $value){}

	/**
	 * @param float $x
	 * @param float $y
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-set-text-pos.php
	 */
	function set_text_pos(float $x, float $y){}

	/**
	 * @param string $key
	 * @param float $value
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-set-value.php
	 */
	function set_value(string $key, float $value){}

	/**
	 * @param string $fstype
	 * @param string $colorspace
	 * @param float $c1
	 * @param float $c2
	 * @param float $c3
	 * @param float $c4
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-setcolor.php
	 */
	function setcolor(string $fstype, string $colorspace, float $c1, float $c2, float $c3, float $c4){}

	/**
	 * @param float $b
	 * @param float $w
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-setdash.php
	 */
	function setdash(float $b, float $w){}

	/**
	 * @param string $optlist
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-setdashpattern.php
	 */
	function setdashpattern(string $optlist){}

	/**
	 * @param float $flatness
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-setflat.php
	 */
	function setflat(float $flatness){}

	/**
	 * @param int $font
	 * @param float $fontsize
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-setfont.php
	 */
	function setfont(int $font, float $fontsize){}

	/**
	 * @param float $g
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-setgray-fill.php (dep)
	 */
	function setgray_fill(float $g){}

	/**
	 * @param float $g
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-setgray-stroke.php (dep)
	 */
	function setgray_stroke(float $g){}

	/**
	 * @param float $g
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-setgray.php (dep)
	 */
	function setgray(float $g){}

	/**
	 * @param int $linecap
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-setlinecap.php
	 */
	function setlinecap(int $linecap){}

	/**
	 * @param int $value
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-setlinejoin.php
	 */
	function setlinejoin(int $value){}

	/**
	 * @param float $width
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-setlinewidth.php
	 */
	function setlinewidth(float $width){}

	/**
	 * @param float $a
	 * @param float $b
	 * @param float $c
	 * @param float $d
	 * @param float $e
	 * @param float $f
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-setmatrix.php
	 */
	function setmatrix(float $a, float $b, float $c, float $d, float $e, float $f){}

	/**
	 * @param float $miter
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-setmiterlimit.php
	 */
	function setmiterlimit(float $miter){}

	/**
	 * @param float $red
	 * @param float $green
	 * @param float $blue
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-setrgbcolor-fill.php (dep)
	 */
	function setrgbcolor_fill(float $red, float $green, float $blue){}

	/**
	 * @param float $red
	 * @param float $green
	 * @param float $blue
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-setrgbcolor-stroke.php (dep)
	 */
	function setrgbcolor_stroke(float $red, float $green, float $blue){}

	/**
	 * @param float $red
	 * @param float $green
	 * @param float $blue
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-setrgbcolor.php (dep)
	 */
	function setrgbcolor(float $red, float $green, float $blue){}

	/**
	 * @param int $shading
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-shading-pattern.php
	 */
	function shading_pattern(int $shading, string $optlist){}

	/**
	 * @param string $shtype
	 * @param float $x0
	 * @param float $y0
	 * @param float $x1
	 * @param float $y1
	 * @param float $c1
	 * @param float $c2
	 * @param float $c3
	 * @param float $c4
	 * @param string $optlist
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-shading.php
	 */
	function shading(string $shtype, float $x0, float $y0, float $x1, float $y1, float $c1, float $c2, float $c3, float $c4, string $optlist){}

	/**
	 * @param int $shading
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-shfill.php
	 */
	function shfill(int $shading){}

	/**
	 * @param string $text
	 * @param float $left
	 * @param float $top
	 * @param float $width
	 * @param float $height
	 * @param string $mode
	 * @param string $feature
	 *
	 * @return int
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-show-boxed.php (dep)
	 */
	function show_boxed(string $text, float $left, float $top, float $width, float $height, string $mode, string $feature){}

	/**
	 * @param string $text
	 * @param float $x
	 * @param float $y
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-show-xy.php
	 */
	function show_xy(string $text, float $x, float $y){}

	/**
	 * @param string $text
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-show.php
	 */
	function show(string $text){}

	/**
	 * @param float $alpha
	 * @param float $beta
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-skew.php
	 */
	function skew(float $alpha, float $beta){}

	/**
	 * @param string $text
	 * @param int $font
	 * @param float $fontsize
	 *
	 * @return float
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-stringwidth.php
	 */
	function stringwidth(string $text, int $font, float $fontsize){}

	/**
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-stroke.php
	 */
	function stroke($p){}

	/**
	 * @param string $optlist
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-suspend-page.php
	 */
	function suspend_page(string $optlist){}

	/**
	 * @param float $tx
	 * @param float $ty
	 *
	 * @return bool
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-translate.php
	 */
	function translate(float $tx, float $ty){}

	/**
	 * @param string $utf16string
	 *
	 * @return string
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-utf16-to-utf8.php
	 */
	function utf16_to_utf8(string $utf16string){}

	/**
	 * @param string $utf32string
	 * @param string $ordering
	 *
	 * @return string
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-utf32-to-utf16.php
	 */
	function utf32_to_utf16(string $utf32string, string $ordering){}

	/**
	 * @param string $utf8string
	 * @param string $ordering
	 *
	 * @return string
	 *
	 * @link https://secure.php.net/manual/en/function.pdf-utf8-to-utf16.php
	 */
	function utf8_to_utf16(string $utf8string, string $ordering){}

}

/**
 * Activates a previously created structure element or other content item.
 * @param $pdf
 * @param $id
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-activate-item.php
 */
function PDF_activate_item($pdf, $id){}

/**
 * Adds a link to a web resource.
 * @param resource $pdf
 * @param float $llx
 * @param float $lly
 * @param float $urx
 * @param float $ury
 * @param string $filename
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-add-launchlink.php
 *
 * @deprecated This function is deprecated since PDFlib version 6, use PDF_create_action() with type=Launch and PDF_create_annotation() with type=Link instead.
 */
function PDF_add_launchlink($pdf, float $llx, float $lly, float $urx, float $ury, string $filename){}

/**
 * Add a link annotation to a target within the current PDF file.
 *
 * @param resource $pdf
 * @param float $lowerleftx
 * @param float $lowerlefty
 * @param float $upperrightx
 * @param float $upperrighty
 * @param int $page
 * @param string $dest
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-add-locallink.php
 *
 * @deprecated This function is deprecated since PDFlib version 6, use PDF_create_action() with type=GoTo and PDF_create_annotation() with type=Link instead.
 */
function PDF_add_locallink($pdf, float $lowerleftx, float $lowerlefty, float $upperrightx, float $upperrighty, int $page, string $dest){}

/**
 * Creates a named destination on an arbitrary page in the current document.
 *
 * @param resource $pdf
 * @param string $name
 * @param string $optlist
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-add-nameddest.php
 */
function PDF_add_nameddest($pdf, string $name, string $optlist){}

/**
 * Sets an annotation for the current page.
 *
 * @param resource $pdf
 * @param float $llx
 * @param float $lly
 * @param float $urx
 * @param float $ury
 * @param string $contents
 * @param string $title
 * @param string $icon
 * @param int $open
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-add-note.php
 *
 * @deprecated This function is deprecated since PDFlib version 6, use PDF_create_annotation() with type=Text instead.
 */
function PDF_add_note($pdf, float $llx, float $lly, float $urx, float $ury, string $contents, string $title, string $icon, int $open){}

/**
 * Add a file link annotation to a PDF target.
 *
 * @param resource $pdf
 * @param float $bottom_left_x
 * @param float $bottom_left_y
 * @param float $up_right_x
 * @param float $up_right_y
 * @param string $filename
 * @param int $page
 * @param string $dest
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-add-pdflink.php
 *
 * @deprecated This function is deprecated since PDFlib version 6, use PDF_create_action() with type=GoToR and PDF_create_annotation() with type=Link instead.
 */
function PDF_add_pdflink($pdf, float $bottom_left_x, float $bottom_left_y, float $up_right_x, float $up_right_y, string $filename, int $page, string $dest){}

/**
 * Adds a cell to a new or existing table.
 *
 * @param resource $pdf
 * @param int $table
 * @param int $column
 * @param int $row
 * @param string $text
 * @param string $optlist
 *
 * @return int
 *
 * @link https://secure.php.net/manual/en/function.pdf-add-table-cell.php
 */
function PDF_add_table_cell($pdf, int $table, int $column, int $row, string $text, string $optlist){}

/**
 * Creates a Textflow object, or adds text and explicit options to an existing Textflow.
 *
 * @param resource $pdf
 * @param int $textflow
 * @param string $text
 * @param string $optlist
 *
 * @return int
 *
 * @link https://secure.php.net/manual/en/function.pdf-add-textflow.php
 */
function PDF_add_textflow($pdf , int $textflow , string $text , string $optlist){}

/**
 * Adds an existing image as thumbnail for the current page.
 *
 * @param resource $pdf
 * @param int $image
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-add-thumbnail.php
 */
function PDF_add_thumbnail($pdf, int $image){}

/**
 * Adds a weblink annotation to a target url on the Web.
 *
 * @param resource $pdf
 * @param float $lowerleftx
 * @param float $lowerlefty
 * @param float $upperrightx
 * @param float $upperrighty
 * @param string $url
 *
 * @return bool
 *
 * @deprecated This function is deprecated since PDFlib version 6, use PDF_create_action() with type=URI and PDF_create_annotation() with type=Link instead.
 *
 * @link https://secure.php.net/manual/en/function.pdf-add-weblink.php
 */
function PDF_add_weblink($pdf, float $lowerleftx, float $lowerlefty, float $upperrightx, float $upperrighty, string $url){}

/**
 * Adds a counterclockwise circular arc
 *
 * @param resource $pdf
 * @param float $x
 * @param float $y
 * @param float $r
 * @param float $alpha
 * @param float $beta
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-arc.php
 */
function PDF_arc($pdf, float $x, float $y, float $r, float $alpha, float $beta){}

/**
 * Except for the drawing direction, this function behaves exactly like PDF_arc().
 *
 * @param resource $pdf
 * @param float $x
 * @param float $y
 * @param float $r
 * @param float $alpha
 * @param float $beta
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-arcn.php
 */
function PDF_arcn($pdf, float $x, float $y, float $r, float $alpha, float $beta){}

/**
 * Adds a file attachment annotation.
 *
 * @param resource $pdf
 * @param float $llx
 * @param float $lly
 * @param float $urx
 * @param float $ury
 * @param string $filename
 * @param string $description
 * @param string $author
 * @param string $mimetype
 * @param string $icon
 *
 * @return bool
 *
 * @deprecated This function is deprecated since PDFlib version 6, use PDF_create_annotation() with type=FileAttachment instead.
 *
 * @link https://secure.php.net/manual/en/function.pdf-attach-file.php
 */
function PDF_attach_file($pdf, float $llx, float $lly, float $urx, float $ury, string $filename, string $description, string $author, string $mimetype, string $icon){}

/**
 * Creates a new PDF file subject to various options.
 *
 * @param resource $pdf
 * @param string $filename
 * @param string $optlist
 *
 * @return int
 *
 * @link https://secure.php.net/manual/en/function.pdf-begin-document.php
 * @link https://www.pdflib.com/fileadmin/pdflib/pdf/manuals/PDFlib-9.1.2-API-reference.pdf
 */
function PDF_begin_document($pdf, string $filename, string $optlist){}

/**
 * Starts a Type 3 font definition.
 *
 * @param resource $pdf
 * @param string $filename
 * @param float $a
 * @param float $b
 * @param float $c
 * @param float $d
 * @param float $e
 * @param float $f
 * @param string $optlist
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-begin-font.php
 */
function PDF_begin_font($pdf, string $filename, float $a, float $b, float $c, float $d, float $e, float $f, string $optlist){}

/**
 * Starts a glyph definition for a Type 3 font.
 *
 * @param resource $pdf
 * @param string $glyphname
 * @param float $wx
 * @param float $llx
 * @param float $lly
 * @param float $urx
 * @param float $ury
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-begin-glyph.php
 */
function PDF_begin_glyph($pdf, string $glyphname, float $wx, float $llx, float $lly, float $urx, float $ury){}

/**
 * Opens a structure element or other content item with attributes supplied as options.
 *
 * @param resource $pdf
 * @param string $tag
 * @param string $optlist
 *
 * @return int
 *
 * @link https://secure.php.net/manual/en/function.pdf-begin-item.php
 */
function PDF_begin_item($pdf, string $tag, string $optlist){}

/**
 * Starts a layer for subsequent output on the page.
 *
 * @param resource $pdf
 * @param int $layer
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-begin-layer.php
 */
function PDF_begin_layer($pdf, int $layer){}

/**
 * Adds a new page to the document, and specifies various options. The parameters width and height are the dimensions of the new page in points.
 *
 * @param resource $pdf
 * @param float $width
 * @param float $height
 * @param string $optlist
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-begin-page-ext.php
 */
function PDF_begin_page_ext($pdf, float $width, float $height, string $optlist){}


/**
 * Adds a new page to the document.
 *
 * @param resource $pdf
 * @param float $width
 * @param float $height
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-begin-page.php
 *
 * @deprecated This function is deprecated since PDFlib version 6, use PDF_begin_page_ext() instead.
 */
function PDF_begin_page($pdf, float $width, float $height){}

/**
 * Starts a new pattern definition.
 *
 * @param resource $pdf
 * @param float $width
 * @param float $height
 * @param float $xstep
 * @param float $ystep
 * @param int $painttype
 *
 * @return int
 *
 * @link https://secure.php.net/manual/en/function.pdf-begin-pattern.php
 */
function PDF_begin_pattern($pdf, float $width, float $height, float $xstep, float $ystep, int $painttype){}

/**
 * Starts a new template definition.
 *
 * @param resource $pdf
 * @param float $width
 * @param float $height
 * @param string $optlist
 *
 * @return int
 *
 * @link https://secure.php.net/manual/en/function.pdf-begin-template-ext.php
 */
function PDF_begin_template_ext($pdf, float $width, float $height, string $optlist){}

/**
 * @param resource $pdf
 * @param float $width
 * @param float $height
 *
 * @return int
 *
 * @link https://secure.php.net/manual/en/function.pdf-begin-template.php
 *
 * @deprecated This function is deprecated since PDFlib version 7, use PDF_begin_template_ext() instead.
 */
function PDF_begin_template($pdf, float $width, float $height){}

/**
 * @param resource $pdf
 * @param float $x
 * @param float $y
 * @param float $r
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-circle.php
 */
function PDF_circle($pdf, float $x, float $y, float $r){}

/**
 * @param resource $pdf
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-clip.php
 */
function PDF_clip($pdf){}

/**
 * @param resource $pdf
 * @param int $image
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-close-image.php
 */
function PDF_close_image($pdf, int $image){}

/**
 * Closes the page handle, and frees all page-related resources
 *
 * @param resource $pdf
 * @param int $page
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-close-pdi-page.php
 */
function PDF_close_pdi_page($pdf, int $page){}

/**
 * @param resource $pdf
 * @param int $doc
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-close-pdi.php
 *
 * @deprecated This function is deprecated since PDFlib version 7, use PDF_close_pdi_document() instead.
 */
function PDF_close_pdi($pdf, int $doc){}

/**
 * @param resource $pdf
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-close.php
 *
 * @deprecated This function is deprecated since PDFlib version 6, use PDF_end_document() instead.
 */
function PDF_close($pdf){}

/**
 * @param resource $pdf
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-closepath-fill-stroke.php
 */
function PDF_closepath_fill_stroke($pdf){}

/**
 * @param resource $pdf
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-closepath-stroke.php
 */
function PDF_closepath_stroke($pdf){}

/**
 * @param resource $pdf
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-closepath.php
 */
function PDF_closepath($pdf){}

/**
 * @param resource $pdf
 * @param float $a
 * @param float $b
 * @param float $c
 * @param float $d
 * @param float $e
 * @param float $f
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-concat.php
 */
function PDF_concat($pdf, float $a, float $b, float $c, float $d, float $e, float $f){}

/**
 * @param resource $pdf
 * @param string $text
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-continue-text.php
 */
function PDF_continue_text($pdf, string $text){}

/**
 * @param resource $pdf
 * @param string $username
 * @param string $optlist
 *
 * @return int
 * 
 * @link https://secure.php.net/manual/en/function.pdf-create-3dview.php
 */
function PDF_create_3dview($pdf, string $username, string $optlist){}

/**
 * @param resource $pdf
 * @param string $type
 * @param string $optlist
 *
 * @return int
 *
 * @link https://secure.php.net/manual/en/function.pdf-create-action.php
 */
function PDF_create_action($pdf, string $type, string $optlist){}

/**
 * @param resource $pdf
 * @param float $llx
 * @param float $lly
 * @param float $urx
 * @param float $ury
 * @param string $type
 * @param string $optlist
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-create-annotation.php
 */
function PDF_create_annotation($pdf, float $llx, float $lly, float $urx, float $ury, string $type, string $optlist){}

/**
 * @param resource $pdf
 * @param string $text
 * @param string $optlist
 *
 * @return int
 *
 * @link https://secure.php.net/manual/en/function.pdf-create-bookmark.php
 */
function PDF_create_bookmark($pdf, string $text, string $optlist){}

/**
 * @param resource $pdf
 * @param float $llx
 * @param float $lly
 * @param float $urx
 * @param float $ury
 * @param string $name
 * @param string $type
 * @param string $optlist
 *
 * @return bool
 * 
 * @link https://secure.php.net/manual/en/function.pdf-create-field.php
 */
function PDF_create_field($pdf, float $llx, float $lly, float $urx, float $ury, string $name, string $type, string $optlist){}

/**
 * @param resource $pdf
 * @param string $name
 * @param string $optlist
 * 
 * @return bool 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-create-fieldgroup.php
 */
function PDF_create_fieldgroup($pdf, string $name, string $optlist){}

/**
 * @param resource $pdf
 * @param string $optlist
 * 
 * @return int 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-create-gstate.php
 */
function PDF_create_gstate($pdf, string $optlist){}

/**
 * @param resource $pdf
 * @param string $filename
 * @param string $data
 * @param string $optlist
 * 
 * @return bool 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-create-pvf.php
 */
function PDF_create_pvf($pdf, string $filename, string $data, string $optlist){}

/**
 * @param resource $pdf
 * @param string $text
 * @param string $optlist
 * 
 * @return int 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-create-textflow.php
 */
function PDF_create_textflow($pdf, string $text, string $optlist){}

/**
 * @param resource $pdf
 * @param float $x1
 * @param float $y1
 * @param float $x2
 * @param float $y2
 * @param float $x3
 * @param float $y3
 * 
 * @return bool 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-curveto.php
 */
function PDF_curveto($pdf, float $x1, float $y1, float $x2, float $y2, float $x3, float $y3){}

/**
 * @param resource $pdf
 * @param string $name
 * @param string $optlist
 * 
 * @return int 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-define-layer.php
 */
function PDF_define_layer($pdf, string $name, string $optlist){}

/**
 * @param resource $pdf
 * @param string $filename
 * 
 * @return int 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-delete-pvf.php
 */
function PDF_delete_pvf($pdf, string $filename){}

/**
 * @param resource $pdf
 * @param int $table
 * @param string $optlist
 * 
 * @return bool 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-delete-table.php
 */
function PDF_delete_table($pdf, int $table, string $optlist){}

/**
 * @param resource $pdf
 * @param int $textflow
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-delete-textflow.php
 */
function PDF_delete_textflow($pdf, int $textflow){}

/**
 * @param resource $pdf
 * 
 * @return bool 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-delete.php
 */
function PDF_delete($pdf){}

/**
 * @param resource $pdf
 * @param string $encoding
 * @param int $slot
 * @param string $glyphname
 * @param int $uv
 * 
 * @return bool 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-encoding-set-char.php
 */
function PDF_encoding_set_char($pdf, string $encoding, int $slot, string $glyphname, int $uv){}

/**
 * @param resource $pdf
 * @param string $optlist
 * 
 * @return bool 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-end-document.php
 */
function PDF_end_document($pdf, string $optlist){}

/**
 * @param resource $pdf
 * 
 * @return bool 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-end-font.php
 */
function PDF_end_font($pdf){}

/**
 * @param resource $pdf
 * 
 * @return bool 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-end-glyph.php
 */
function PDF_end_glyph($pdf){}

/**
 * @param resource $pdf
 * @param int $id
 * 
 * @return bool 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-end-item.php
 */
function PDF_end_item($pdf, int $id){}

/**
 * @param resource $pdf
 * 
 * @return bool 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-end-layer.php
 */
function PDF_end_layer($pdf){}

/**
 * @param resource $pdf
 * @param string $optlist
 * 
 * @return bool 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-end-page-ext.php
 */
function PDF_end_page_ext($pdf, string $optlist){}

/**
 * @param resource $pdf
 * 
 * @return bool 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-end-page.php
 */
function PDF_end_page($p){}

/**
 * @param resource $pdf
 * 
 * @return bool 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-end-pattern.php
 */
function PDF_end_pattern($p){}

/**
 * @param resource $pdf
 * 
 * @return bool 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-end-template.php
 */
function PDF_end_template($p){}

/**
 * @param resource $pdf
 * 
 * @return bool 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-endpath.php
 */
function PDF_endpath($p){}

/**
 * @param resource $pdf
 * @param int $page
 * @param string $blockname
 * @param int $image
 * @param string $optlist
 * 
 * @return int 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-fill-imageblock.php
 */
function PDF_fill_imageblock($pdf, int $page, string $blockname, int $image, string $optlist){}

/**
 * @param resource $pdf
 * @param int $page
 * @param string $blockname
 * @param int $contents
 * @param string $optlist
 * 
 * @return int 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-fill-pdfblock.php
 */
function PDF_fill_pdfblock($pdf, int $page, string $blockname, int $contents, string $optlist){}

/**
 * @param resource $pdf
 * 
 * @return bool 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-fill-stroke.php
 */
function PDF_fill_stroke($pdf){}

/**
 * @param resource $pdf
 * @param int $page
 * @param string $blockname
 * @param string $text
 * @param string $optlist
 * 
 * @return int 
 * 
 * @link https://secure.php.net/manual/en/function.pdf-fill-textblock.php

 */
function PDF_fill_textblock($pdf, int $page, string $blockname, string $text, string $optlist){}

/**
 * @param resource $pdf
 * 
 * @return bool
 * 
 * @link https://secure.php.net/manual/en/function.pdf-fill.php

 */
function PDF_fill($pdf){}
/**
 * @param resource $pdf
 * @param string $fontname
 * @param string $encoding
 * @param int $embed
 * 
 * @return int
 * 
 * @link https://secure.php.net/manual/en/function.pdf-findfont.php(Dep)

 */
function PDF_findfont($pdf, string $fontname , string $encoding , int $embed){}
/**
 * @param resource $pdf
 * @param int $image
 * @param float $x
 * @param float $y
 * @param string $optlist
 * 
 * @return bool
 * 
 * @link https://secure.php.net/manual/en/function.pdf-fit-image.php

 */
function PDF_fit_image($pdf, int $image , float $x , float $y , string $optlist){}
/**
 * @param resource $pdf
 * @param int $page
 * @param float $x
 * @param float $y
 * @param string $optlist
 * 
 * @return bool
 * 
 * @link https://secure.php.net/manual/en/function.pdf-fit-pdi-page.php

 */
function PDF_fit_pdi_page($pdf, int $page , float $x , float $y , string $optlist){}
/**
 * @param resource $pdf
 * @param int $table
 * @param float $llx
 * @param float $lly
 * @param float $urx
 * @param float $ury
 * @param string $optlist
 * 
 * @return string
 * 
 * @link https://secure.php.net/manual/en/function.pdf-fit-table.php

 */
function PDF_fit_table($pdf, int $table , float $llx , float $lly , float $urx , float $ury , string $optlist){}
/**
 * @param resource $pdf
 * @param int $textflow
 * @param float $llx
 * @param float $lly
 * @param float $urx
 * @param float $ury
 * @param string $optlist
 * 
 * @return string
 * 
 * @link https://secure.php.net/manual/en/function.pdf-fit-textflow.php

 */
function PDF_fit_textflow($pdf, int $textflow , float $llx , float $lly , float $urx , float $ury , string $optlist){}
/**
 * @param resource $pdf
 * @param string $text
 * @param float $x
 * @param float $y
 * @param string $optlist
 * 
 * @return bool
 * 
 * @link https://secure.php.net/manual/en/function.pdf-fit-textline.php

 */
function PDF_fit_textline($pdf, string $text , float $x , float $y , string $optlist){}
/**
 * @param resource $pdf
 * 
 * @return string
 * 
 * @link https://secure.php.net/manual/en/function.pdf-get-apiname.php

 */
function PDF_get_apiname($pdf){}
/**
 * @param resource $pdf
 * 
 * @return string
 * 
 * @link https://secure.php.net/manual/en/function.pdf-get-buffer.php

 */
function PDF_get_buffer($pdf){}
/**
 * @param resource $pdf
 * 
 * @return string
 * 
 * @link https://secure.php.net/manual/en/function.pdf-get-errmsg.php

 */
function PDF_get_errmsg($pdf){}
/**
 * @param resource $pdf
 * 
 * @return int
 * 
 * @link https://secure.php.net/manual/en/function.pdf-get-errnum.php

 */
function PDF_get_errnum($pdf){}
/**
 * @param void $
 * 
 * @return int
 * 
 * @link https://secure.php.net/manual/en/function.pdf-get-majorversion.php(dep)

 */
function PDF_get_majorversion(){}
/**
 * @param void $
 * 
 * @return int
 * 
 * @link https://secure.php.net/manual/en/function.pdf-get-minorversion.php(dep)

 */
function PDF_get_minorversion(){}
/**
 * @param resource $pdf
 * @param string $key
 * @param float $modifier
 * 
 * @return string
 * 
 * @link https://secure.php.net/manual/en/function.pdf-get-parameter.php

 */
function PDF_get_parameter($pdf, string $key , float $modifier){}
/**
 * @param resource $pdf
 * @param string $key
 * @param int $doc
 * @param int $page
 * @param int $reserved
 * 
 * @return string
 * 
 * @link https://secure.php.net/manual/en/function.pdf-get-pdi-parameter.php

 */
function PDF_get_pdi_parameter($pdf, string $key , int $doc , int $page , int $reserved){}
/**
 * @param resource $pdf
 * @param string $key
 * @param int $doc
 * @param int $page
 * @param int $reserved
 * 
 * @return float
 * 
 * @link https://secure.php.net/manual/en/function.pdf-get-pdi-value.php

 */
function PDF_get_pdi_value($pdf, string $key , int $doc , int $page , int $reserved){}
/**
 * @param resource $pdf
 * @param string $key
 * @param float $modifier
 * 
 * @return float
 * 
 * @link https://secure.php.net/manual/en/function.pdf-get-value.php

 */
function PDF_get_value($pdf, string $key , float $modifier){}
/**
 * @param resource $pdf
 * @param int $font
 * @param string $keyword
 * @param string $optlist
 * 
 * @return float
 * 
 * @link https://secure.php.net/manual/en/function.pdf-info-font.php

 */
function PDF_info_font($pdf, int $font , string $keyword , string $optlist){}
/**
 * @param resource $pdf
 * @param string $boxname
 * @param int $num
 * @param string $keyword
 * 
 * @return float
 * 
 * @link https://secure.php.net/manual/en/function.pdf-info-matchbox.php

 */
function PDF_info_matchbox($pdf, string $boxname , int $num , string $keyword){}
/**
 * @param resource $pdf
 * @param int $table
 * @param string $keyword
 * 
 * @return float
 * 
 * @link https://secure.php.net/manual/en/function.pdf-info-table.php

 */
function PDF_info_table($pdf, int $table , string $keyword){}
/**
 * @param resource $pdf
 * @param int $textflow
 * @param string $keyword
 * 
 * @return float
 * 
 * @link https://secure.php.net/manual/en/function.pdf-info-textflow.php

 */
function PDF_info_textflow($pdf, int $textflow , string $keyword){}

/**
 * @param resource $pdf
 * @param string $text
 * @param string $keyword
 * @param string $optlist
 * 
 * @return float
 * 
 * @link https://secure.php.net/manual/en/function.pdf-info-textline.php
 */
function PDF_info_textline($pdf, string $text , string $keyword , string $optlist){}

/**
 * @param resource $pdf
 * 
 * @return bool
 * 
 * @link https://secure.php.net/manual/en/function.pdf-initgraphics.php
 */
function PDF_initgraphics($pdf){}

/**
 * @param resource $pdf
 * @param float $x
 * @param float $y
 * 
 * @return bool
 * 
 * @link https://secure.php.net/manual/en/function.pdf-lineto.php
 */
function PDF_lineto($pdf, float $x , float $y){}

/**
 * @param resource $pdf
 * @param string $filename
 * @param string $optlist
 * 
 * @return int
 * 
 * @link https://secure.php.net/manual/en/function.pdf-load-3ddata.php
 */
function PDF_load_3ddata($pdf, string $filename , string $optlist){}

/**
 * @param resource $pdf
 * @param string $fontname
 * @param string $encoding
 * @param string $optlist
 * 
 * @return int
 * 
 * @link https://secure.php.net/manual/en/function.pdf-load-font.php
 */
function PDF_load_font($pdf, string $fontname , string $encoding , string $optlist){}

/**
 * @param resource $pdf
 * @param string $profilename
 * @param string $optlist
 * 
 * @return int
 * 
 * @link https://secure.php.net/manual/en/function.pdf-load-iccprofile.php
 */
function PDF_load_iccprofile($pdf, string $profilename , string $optlist){}

/**
 * @param resource $pdf
 * @param string $imagetype
 * @param string $filename
 * @param string $optlist
 * 
 * @return int
 * 
 * @link https://secure.php.net/manual/en/function.pdf-load-image.php
 */
function PDF_load_image($pdf, string $imagetype , string $filename , string $optlist){}

/**
 * @param resource $pdf
 * @param string $spotname
 * 
 * @return int
 * 
 * @link https://secure.php.net/manual/en/function.pdf-makespotcolor.php
 */
function PDF_makespotcolor($pdf, string $spotname){}

/**
 * @param resource $pdf
 * @param float $x
 * @param float $y
 * 
 * @return bool
 * 
 * @link https://secure.php.net/manual/en/function.pdf-moveto.php
 */
function PDF_moveto($pdf, float $x , float $y){}

/**
 * @return resource
 * 
 * @link https://secure.php.net/manual/en/function.pdf-new.php
 */
function PDF_new(){}

/**
 * @param resource $pdf
 * @param string $filename
 * @param int $width
 * @param int $height
 * @param int $BitReverse
 * @param int $k
 * @param int $Blackls1
 * 
 * @return int
 * 
 * @link https://secure.php.net/manual/en/function.pdf-open-ccitt.php(dep)
 */
function PDF_open_ccitt($pdf, string $filename , int $width , int $height , int $BitReverse , int $k , int $Blackls1){}

/**
 * @param resource $pdf
 * @param string $filename
 * 
 * @return bool
 * 
 * @link https://secure.php.net/manual/en/function.pdf-open-file.php(dep)
 */
function PDF_open_file($pdf, string $filename){}

/**
 * @param resource $pdf
 * @param string $imagetype
 * @param string $filename
 * @param string $stringparam
 * @param int $intparam
 * 
 * @return int
 * 
 * @link https://secure.php.net/manual/en/function.pdf-open-image-file.php(dep)
 */
function PDF_open_image_file($pdf, string $imagetype , string $filename , string $stringparam , int $intparam){}

/**
 * @param resource $pdf
 * @param string $imagetype
 * @param string $source
 * @param string $data
 * @param int $length
 * @param int $width
 * @param int $height
 * @param int $components
 * @param int $bpc
 * @param string $params
 * 
 * @return int
 * 
 * @link https://secure.php.net/manual/en/function.pdf-open-image.php(dep)
 */
function PDF_open_image($pdf, string $imagetype , string $source , string $data , int $length , int $width , int $height , int $components , int $bpc , string $params){}

/**
 * @param resource $pdf
 * @param resource $image
 * 
 * @return int
 * 
 * @link https://secure.php.net/manual/en/function.pdf-open-memory-image.php(not supported)
 */
function PDF_open_memory_image($pdf, $image){}

/**
 * @param resource $pdf
 * @param string $filename
 * @param string $optlist
 * 
 * @return int
 * 
 * @link https://secure.php.net/manual/en/function.pdf-open-pdi-document.php
 */
function PDF_open_pdi_document($pdf, string $filename , string $optlist){}

/**
 * @param resource $pdf
 * @param int $doc
 * @param int $pagenumber
 * @param string $optlist
 * 
 * @return int
 * 
 * @link https://secure.php.net/manual/en/function.pdf-open-pdi-page.php
 */
function PDF_open_pdi_page($pdf, int $doc , int $pagenumber , string $optlist){}

/**
 * @param resource $pdf
 * @param string $filename
 * @param string $optlist
 * @param int $len
 * 
 * @return int
 * 
 * @link https://secure.php.net/manual/en/function.pdf-open-pdi.php
 */
function PDF_open_pdi($pdf, string $filename , string $optlist , int $len){}

/**
 * @param resource $pdf
 * @param int $doc
 * @param string $path
 * 
 * @return float
 * 
 * @link https://secure.php.net/manual/en/function.pdf-pcos-get-number.php
 */
function PDF_pcos_get_number($pdf, int $doc , string $path){}

/**
 * @param resource $pdf
 * @param int $doc
 * @param string $optlist
 * @param string $path
 *
 * @return string
 *
 * @link https://secure.php.net/manual/en/function.pdf-pcos-get-stream.php
 */
function PDF_pcos_get_stream($pdf, int $doc, string $optlist, string $path){}

/**
 * @param resource $pdf
 * @param int $doc
 * @param string $path
 *
 * @return string
 *
 * @link https://secure.php.net/manual/en/function.pdf-pcos-get-string.php
 */
function PDF_pcos_get_string($pdf, int $doc, string $path){}

/**
 * @param resource $pdf
 * @param int $image
 * @param float $x
 * @param float $y
 * @param float $scale
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-place-image.php (dep)
 */
function PDF_place_image($pdf, int $image, float $x, float $y, float $scale){}

/**
 * @param resource $pdf
 * @param int $page
 * @param float $x
 * @param float $y
 * @param float $sx
 * @param float $sy
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-place-pdi-page.php (dep)
 */
function PDF_place_pdi_page($pdf, int $page, float $x, float $y, float $sx, float $sy){}

/**
 * @param resource $pdf
 * @param int $doc
 * @param int $page
 * @param string $optlist
 *
 * @return int
 *
 * @link https://secure.php.net/manual/en/function.pdf-process-pdi.php
 */
function PDF_process_pdi($pdf, int $doc, int $page, string $optlist){}

/**
 * @param resource $pdf
 * @param float $x
 * @param float $y
 * @param float $width
 * @param float $height
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-rect.php
 */
function PDF_rect($pdf, float $x, float $y, float $width, float $height){}

/**
 * @param resource $pdf
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-restore.php
 */
function PDF_restore($p){}

/**
 * @param resource $pdf
 * @param string $optlist
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-resume-page.php
 */
function PDF_resume_page($pdf, string $optlist){}

/**
 * @param resource $pdf
 * @param float $phi
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-rotate.php
 */
function PDF_rotate($pdf, float $phi){}

/**
 * @param resource $pdf
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-save.php
 */
function PDF_save($p){}

/**
 * @param resource $pdf
 * @param float $sx
 * @param float $sy
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-scale.php
 */
function PDF_scale($pdf, float $sx, float $sy){}

/**
 * @param resource $pdf
 * @param float $red
 * @param float $green
 * @param float $blue
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-set-border-color.php (dep)
 */
function PDF_set_border_color($pdf, float $red, float $green, float $blue){}

/**
 * @param resource $pdf
 * @param float $black
 * @param float $white
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-set-border-dash.php (dep)
 */
function PDF_set_border_dash($pdf, float $black, float $white){}

/**
 * @param resource $pdf
 * @param string $style
 * @param float $width
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-set-border-style.php (dep)
 */
function PDF_set_border_style($pdf, string $style, float $width){}

/**
 * @param resource $pdf
 * @param int $gstate
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-set-gstate.php
 */
function PDF_set_gstate($pdf, int $gstate){}

/**
 * @param resource $pdf
 * @param string $key
 * @param string $value
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-set-info.php
 */
function PDF_set_info($pdf, string $key, string $value){}

/**
 * @param resource $pdf
 * @param string $type
 * @param string $optlist
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-set-layer-dependency.php
 */
function PDF_set_layer_dependency($pdf, string $type, string $optlist){}

/**
 * @param resource $pdf
 * @param string $key
 * @param string $value
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-set-parameter.php
 */
function PDF_set_parameter($pdf, string $key, string $value){}

/**
 * @param resource $pdf
 * @param float $x
 * @param float $y
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-set-text-pos.php
 */
function PDF_set_text_pos($pdf, float $x, float $y){}

/**
 * @param resource $pdf
 * @param string $key
 * @param float $value
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-set-value.php
 */
function PDF_set_value($pdf, string $key, float $value){}

/**
 * @param resource $pdf
 * @param string $fstype
 * @param string $colorspace
 * @param float $c1
 * @param float $c2
 * @param float $c3
 * @param float $c4
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-setcolor.php
 */
function PDF_setcolor($pdf, string $fstype, string $colorspace, float $c1, float $c2, float $c3, float $c4){}

/**
 * @param resource $pdf
 * @param float $b
 * @param float $w
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-setdash.php
 */
function PDF_setdash($pdf, float $b, float $w){}

/**
 * @param resource $pdf
 * @param string $optlist
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-setdashpattern.php
 */
function PDF_setdashpattern($pdf, string $optlist){}

/**
 * @param resource $pdf
 * @param float $flatness
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-setflat.php
 */
function PDF_setflat($pdf, float $flatness){}

/**
 * @param resource $pdf
 * @param int $font
 * @param float $fontsize
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-setfont.php
 */
function PDF_setfont($pdf, int $font, float $fontsize){}

/**
 * @param resource $pdf
 * @param float $g
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-setgray-fill.php (dep)
 */
function PDF_setgray_fill($pdf, float $g){}

/**
 * @param resource $pdf
 * @param float $g
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-setgray-stroke.php (dep)
 */
function PDF_setgray_stroke($pdf, float $g){}

/**
 * @param resource $pdf
 * @param float $g
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-setgray.php (dep)
 */
function PDF_setgray($pdf, float $g){}

/**
 * @param resource $pdf
 * @param int $linecap
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-setlinecap.php
 */
function PDF_setlinecap($pdf, int $linecap){}

/**
 * @param resource $pdf
 * @param int $value
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-setlinejoin.php
 */
function PDF_setlinejoin($pdf, int $value){}

/**
 * @param resource $pdf
 * @param float $width
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-setlinewidth.php
 */
function PDF_setlinewidth($pdf, float $width){}

/**
 * @param resource $pdf
 * @param float $a
 * @param float $b
 * @param float $c
 * @param float $d
 * @param float $e
 * @param float $f
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-setmatrix.php
 */
function PDF_setmatrix($pdf, float $a, float $b, float $c, float $d, float $e, float $f){}

/**
 * @param resource $pdf
 * @param float $miter
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-setmiterlimit.php
 */
function PDF_setmiterlimit($pdf, float $miter){}

/**
 * @param resource $pdf
 * @param float $red
 * @param float $green
 * @param float $blue
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-setrgbcolor-fill.php (dep)
 */
function PDF_setrgbcolor_fill($pdf, float $red, float $green, float $blue){}

/**
 * @param resource $pdf
 * @param float $red
 * @param float $green
 * @param float $blue
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-setrgbcolor-stroke.php (dep)
 */
function PDF_setrgbcolor_stroke($pdf, float $red, float $green, float $blue){}

/**
 * @param resource $pdf
 * @param float $red
 * @param float $green
 * @param float $blue
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-setrgbcolor.php (dep)
 */
function PDF_setrgbcolor($pdf, float $red, float $green, float $blue){}

/**
 * @param resource $pdf
 * @param int $shading
 * @param string $optlist
 *
 * @return int
 *
 * @link https://secure.php.net/manual/en/function.pdf-shading-pattern.php
 */
function PDF_shading_pattern($pdf, int $shading, string $optlist){}

/**
 * @param resource $pdf
 * @param string $shtype
 * @param float $x0
 * @param float $y0
 * @param float $x1
 * @param float $y1
 * @param float $c1
 * @param float $c2
 * @param float $c3
 * @param float $c4
 * @param string $optlist
 *
 * @return int
 *
 * @link https://secure.php.net/manual/en/function.pdf-shading.php
 */
function PDF_shading($pdf, string $shtype, float $x0, float $y0, float $x1, float $y1, float $c1, float $c2, float $c3, float $c4, string $optlist){}

/**
 * @param resource $pdf
 * @param int $shading
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-shfill.php
 */
function PDF_shfill($pdf, int $shading){}

/**
 * @param resource $pdf
 * @param string $text
 * @param float $left
 * @param float $top
 * @param float $width
 * @param float $height
 * @param string $mode
 * @param string $feature
 *
 * @return int
 *
 * @link https://secure.php.net/manual/en/function.pdf-show-boxed.php (dep)
 */
function PDF_show_boxed($pdf, string $text, float $left, float $top, float $width, float $height, string $mode, string $feature){}

/**
 * @param resource $pdf
 * @param string $text
 * @param float $x
 * @param float $y
 *
 * @return bool
 *
 * @link https://secure.php.net/manual/en/function.pdf-show-xy.php
 */
function PDF_show_xy($pdf, string $text, float $x, float $y){}

/**
 * @param resource $pdf
 * @param string $text
 * 
 * @return bool
 * 
 * @link https://secure.php.net/manual/en/function.pdf-show.php
 */
function PDF_show($pdf, string $text){}

/**
 * @param resource $pdf
 * @param float $alpha
 * @param float $beta
 * 
 * @return bool
 * 
 * @link https://secure.php.net/manual/en/function.pdf-skew.php
 */
function PDF_skew($pdf, float $alpha, float $beta){}

/**
 * @param resource $pdf
 * @param string $text
 * @param int $font
 * @param float $fontsize
 * 
 * @return float
 * 
 * @link https://secure.php.net/manual/en/function.pdf-stringwidth.php
 */
function PDF_stringwidth($pdf, string $text, int $font, float $fontsize){}

/**
 * @param resource $pdf
 * 
 * @return bool
 * 
 * @link https://secure.php.net/manual/en/function.pdf-stroke.php
 */
function PDF_stroke($p){}

/**
 * @param resource $pdf
 * @param string $optlist
 * 
 * @return bool
 * 
 * @link https://secure.php.net/manual/en/function.pdf-suspend-page.php
 */
function PDF_suspend_page($pdf, string $optlist){}

/**
 * @param resource $pdf
 * @param float $tx
 * @param float $ty
 * 
 * @return bool
 * 
 * @link https://secure.php.net/manual/en/function.pdf-translate.php
 */
function PDF_translate($pdf, float $tx, float $ty){}

/**
 * @param resource $pdf
 * @param string $utf16string
 * 
 * @return string
 * 
 * @link https://secure.php.net/manual/en/function.pdf-utf16-to-utf8.php
 */
function PDF_utf16_to_utf8($pdf, string $utf16string){}

/**
 * @param resource $pdf
 * @param string $utf32string
 * @param string $ordering
 * 
 * @return string
 * 
 * @link https://secure.php.net/manual/en/function.pdf-utf32-to-utf16.php
 */
function PDF_utf32_to_utf16($pdf, string $utf32string, string $ordering){}

/**
 * @param resource $pdf
 * @param string $utf8string
 * @param string $ordering
 * 
 * @return string
 * 
 * @link https://secure.php.net/manual/en/function.pdf-utf8-to-utf16.php
 */
function PDF_utf8_to_utf16($pdf, string $utf8string, string $ordering){}
