<?php

/**
 * Collection of ODF Nodetypes.
 *
 * @author Philipp Hirsch <itself@hanspolo.net>
 * @license http://www.gnu.org/licenses/gpl.txt GNU Public License
 * @package ODF-PHP
 * @version 0.1
 */
class ODF_Node
{
  const body = "office:body";
  const text = "office:text";

  const h = "text:h";
  const p = "text:p";
  const list_body = "text:list";
  const list_header = "text:list-header";
  const list_item = "text:list-item";
  const line_break = "text:line-break";

  const table = "table:table";
  const table_row = "table:table-row";
  const table_column = "table:table-column";
  const table_cell = "table:table-cell";
}

/**
 * Collection of ODF Attributetypes.
 *
 * @author Philipp Hirsch <itself@hanspolo.net>
 * @license http://www.gnu.org/licenses/gpl.txt GNU Public License
 * @package ODF-PHP
 * @version 0.1
 */
class ODF_Attribute
{
  const visibility = "office:visibility";
}