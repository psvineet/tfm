# Changelog — Modified Tiny File Manager

Full diff review of the modified file against upstream `tinyfilemanager.php` (prasathmani/tinyfilemanager). 225 functions total vs 77 in upstream — **148 new functions** added, grouped below by area.

## Authentication & Security

- **TOTP two-factor authentication** — per-user optional 2FA (RFC 6238): secret generation, base32 encode/decode, code verification, `otpauth://` URI + QR code for authenticator apps, enable/disable/setup UI (`fm_totp_*`, `fmOpenTotpModal`).
- **Brute-force login protection** — failed attempts tracked per IP in a runtime file store, temporary lockout with remaining-time display (`fm_bf_*`, `fm_is_blocked_ip`).
- **Separate brute-force guard for the public upload portal** — same mechanism, scoped independently (`fm_portal_bf_*`).
- **Password hashing helper + UI** — generate/copy a `password_hash()` value from the admin panel (`fm_hash_password`, `copyHash`, `showHashModal`).
- **Secure upload directory helper** — dedicated handling for where/how uploaded files are stored (`fm_secure_upload_dir`).
- **Blocked-port list for URL import/fetch** — default blocklist (22, 23, 25, 3306, 6379, 27017) to reduce SSRF risk when fetching a remote URL into the file system.
- **World-permission warnings** — file info panel flags world-writable/world-executable bits with a visible ⚠, alongside existing octal/symbolic permission display.
- **Password-protected zip create/extract** — optional password field added to the existing zip/unzip flow (`openZipPasswordModal`, `openUnzipPasswordModal`, `submitZipWithPassword`, `submitUnzipWithPassword`, `fm_zip_add_dir`).
- **Math CAPTCHA on login** — a simple generated arithmetic challenge (`$_SESSION['captcha_answer']`, `fm_captcha`) required alongside username/password.
- **Separate CAPTCHA for the public upload portal** — same mechanism, independent session state (`portal_captcha_answer`, `portal_captcha`).
- **CSRF token protection** — a per-session token (`window.csrf`) required on session-management AJAX calls (list/kill session) and on rename; a separate rotating token (`portal_csrf`) protects the public upload portal's POST requests (`hash_equals` verified).

## Session Management

- **Active session tracking** — sessions recorded with device/IP metadata, listable per user and across all users (`fm_session_register`, `fm_session_list_for`, `fm_session_list_all`, `loadSessions`).
- **Remote session kill** — end a specific session or all other sessions for the current user from the UI (`fm_session_kill`, `fm_session_mark_killed`, `killSession`, `killAllOthers`).
- **Session auto-refresh / expiry pruning** — periodic client-side refresh and server-side pruning of expired sessions (`fmStartSessionAutoRefresh`, `fm_sessions_prune_expired`).
- **Device labeling** — sessions shown with a human-readable device icon/label (`fmDeviceIcon`, `fmDeviceLabel`).

## User Management

- **Add/delete users from the UI** — user accounts (previously only editable in the config array) can now be added or removed through an admin panel (`addUser`, `deleteUser`, `confirmDeleteUser`, `loadUsers`, `fm_name_from_passwd`).
- **Per-user/per-directory ownership resolution** — resolve OS owner/group info for display (`fm_resolve_owner_group`, `fm_name_from_group`).

## Notifications & Activity Logging

- **SMTP email notifications** — sends email via SMTP for failed logins (and successful logins, per `fm_send_login_notification`), with a themed HTML email template (`fm_smtp_send`, `fm_build_themed_email`, `fm_send_failed_login_notification`, `fm_send_login_notification`).
- **Notification test button** — send a test notification email from settings (`fmTestNotify`, `fmSaveNotifySettings`).
- **Geo-IP lookup on login events** — resolves approximate location for the connecting IP for use in login notification emails (`fm_lookup_geo`, `fm_http_get_json`).
- **Activity log** — append-only log of user actions with rotation to cap file size (`fm_log_activity`, `fm_activity_log`, `fm_rotate_activity_log`).

## File Operations

- **Bulk rename with pattern support** — apply a naming pattern (with sequence numbering, alpha indexing) across multiple selected files at once (`applyBulkPattern`, `applyBulkSameName`, `_applyPatternToName`, `_idxToAlpha`, `_alphaToIdx`, `submitBulkRename`, `resetBulkPattern`, `toggleBulkNumbering`).
- **Bulk download** — download multiple selected items together (`bulkDownload`).
- **Directory size calculation** — compute and display total size of a folder on demand (`fm_get_dir_size`).
- **Image/file viewer prev/next navigation** — move between sibling files in the current folder while viewing, without returning to the listing.
- **Zoomable/pannable image preview** — fit-to-width, zoom controls, and free-form drawing/annotation over an image (`setZoom`, `fitWidthScale`, `draw`, `stopDrawing`, `resize`).

## Uploads

- **Chunked upload with progress + queue** — files uploaded in chunks with a per-file progress pill and queue processing (`sendChunk`, `enqueue`, `processNext`, `runBatch`, `setProgress`, `setPillText`, `pillError`).
- **Public upload portal** — a separate, optionally password-protected upload endpoint for external/anonymous uploads, with its own theme and brute-force protection (`fm_public_upload_portal`, `fmTogglePublicUpload`, `fmPortalGetTheme`, `updateUploadTarget`).
- **Toggleable upload password** — set/clear a password required for uploads from settings (`fmSaveUploadPassword`, `fmClearUploadPassword`).

## UI / UX

- **Toast notification system** — non-blocking, auto-dismissing toasts replace blocking `alert()` calls for actions like save/delete/rename (`fmToast`, `fmDismissToast`).
- **Page navigation loader** — lightweight loading indicator during link navigation/form submission (`showLoader`).
- **Light/dark theme toggle** — persisted theme preference with an icon/ripple transition effect (`fmSetTheme`, `fmGetTheme`, `fmToggleTheme`, `fmApplyThemeIcon`, `fmThemeRipple`).
- **Pagination for large directory listings** — client-side paging instead of one long list (`renderPage`, `goToPage`, `getCurrentVisiblePage`, `unrenderPage`).
- **Rebuilt breadcrumb rendering** — breadcrumb path segments generated/rendered client-side (`renderBreadcrumb`, `pathLabel`).
- **Selection helpers** — bulk-action buttons enable/disable based on current selection state (`hasSelection`, `hasMultiSelection`, `updateBulkButtons`, `updateBtn`).
- **Relative time display** — "X minutes ago"-style formatting for modification dates/session activity (`fmRelativeTime`).
- **Human-readable file size formatting** — consistent byte-to-KB/MB/GB formatting across new components (`fmt_bytes`, `formatBytes`, `formatSize`).
- **Split footer credit rendering** — separate footer-credit markup for the login page vs. the authenticated app view.
- **Confirmation dialogs for destructive actions** — reusable confirm-dialog helper used across delete/kill-session/etc. flows (`confirmDailog`).
- **Expanded drag-and-drop support** — drag-and-drop handling extended beyond the original upload dropzone (roughly 3x the drag/drop event hooks of upstream) to cover more of the file-listing UI.
- **Dark mode** — a proper dark theme (distinct from the light/dark *toggle* mechanism above), with its own color set rather than a simple invert.
- **Keyboard shortcuts** — additional keydown handling for navigation/actions beyond upstream's single shortcut.
- **Clipboard integration** — copy-to-clipboard support added for things like the generated password hash (`copyHash`).

## Localization

Translation support (`lng()`-routed strings) was **removed for most new UI** — toasts, session panel, 2FA setup, upload queue, CAPTCHA prompts, and other new components use hardcoded English text instead of the translation system. This is why the translation-key count is lower than upstream despite the large amount of new UI added.

## Compatibility

- **Office document viewer fallback** — for doc/docx/xls/xlsx/ppt/pptx/odt/ods/odp files, tries Microsoft's online viewer server-side first, falling back automatically to the existing Google Docs Viewer if Microsoft's viewer can't reach the file (common on free/shared hosting).

## Config additions (`$CONFIG` / top-level settings)

- `smtp_enabled`, `smtp_host`, `smtp_port`, `smtp_secure`, `smtp_user`, `smtp_from`, `smtp_to`, `smtp_pass`, `notify_on_failed_login`
- `upload_password_hash`, `public_upload_enabled`
- `readonly_nodownload_users` (per-user download block, independent of the existing readonly/write block)

## Not carried over from the personal deployment

- Custom branding (app title, author name, links, meta tags) — left as upstream defaults.
- A self-enforcing "attribution watermark" script (MutationObserver-based warning banner) — deployment-specific, not proposed upstream.
- Personal credentials (SMTP password, custom auth users, upload password hash) — blanked/reset to sample values.

---

All items above are additive/opt-in; default behavior for a fresh upstream config is unchanged unless a feature is explicitly enabled. This is only the itemized portion of the diff — many more smaller enhancements, tweaks, and fixes are present throughout beyond what's captured above.

## Credit

This is a modified version built entirely on top of **[Tiny File Manager](https://github.com/prasathmani/tinyfilemanager)** by **CCP Programmers**. All core architecture, base UI, file-management logic, and original feature set belong to the upstream project — full credit to the original authors and maintainers for the foundation this work extends.
