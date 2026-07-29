# CGCG 2026 — Design vs Code Gap Analysis

Compares the Figma exports in `Downloads/CGCG 2026/` against the implemented site in
`Downloads/cgcg-2026/cgcg-2026/`. Generated during the autonomous build pass.

**Key finding:** the existing code is *already an implementation of these designs* — an
earlier iteration. Most content and structure match. The real gaps are (1) the homepage
hero (now fixed), (2) the global header/nav, and (3) a handful of broken links.

---

## 1. Fonts — RESOLVED

| Role | Design | In code | Status |
|------|--------|---------|--------|
| Body / nav / headings / subpage heroes | **Nexa** (Book + Bold) | `NL`/`NB` = Nexa, self-hosted | ✅ already correct |
| Homepage hero display (condensed all-caps) | **Anton** | was Nexa Bold | ✅ **added** `fonts/anton.woff2` + `@font-face` |
| Eyebrow / label tags (`NETWORK AS A SERVICE · NEW YORK`) | monospace ≈ JetBrains Mono | `--mono: "JetBrains Mono"…` | ✅ already correct |

- Confirmed the Nexa files via the font `name` table: `n.woff2`→Nexa Bold, `nbold.woff2`→Nexa Bold, `nbook.woff2`→Nexa Book.
- Anton is homepage-hero-only in the design; subpage heroes use Nexa, so Anton does **not** need propagating to subpages.

---

## 2. Homepage (`Desktop - 2.png` → `index.html`)

> **Both homepage variants are kept:** `index.html` = the original design
> (`We make your IT chaos disappear`, spoke-SVG hero); **`desktop_home_alternative.html`**
> = the new Anton redesign described below.

### Built (in `desktop_home_alternative.html`)
- **Hero headline** — was `We make your IT chaos disappear` in Nexa Bold, left-aligned beside a large spoke SVG. Now `SOLUTIONS MADE TO MAKE YOUR BUSINESS THRIVE` (rendered uppercase) in **Anton**, centered, per design.
- **Hero layout** — restructured to: centered display headline over a faint full-bleed network graphic (the old spoke SVG, reused at `opacity:0.16`), with a bottom row = intro copy + `Let's Talk`/`Explore Services` buttons on the left, `$30B / $20M / 224,100,8` stats card on the right. Matches the frame.
- **Perf** — dropped `mix-blend-mode:screen` on the now-full-bleed hero SVG (gray-on-black is visually identical without it; the per-path blend was very expensive to composite).
- Verified via DOM: Anton applied, 140–158px responsive, stats grid intact, **no console errors**.

### Already correct (no change needed)
- "We create a **Unified System**" section — content + 2×2 grid (Infrastructure / Cybersecurity / Operations / Data) matches the design exactly.
- Guardian Pulse radar — `Always watching. Always on.` heading + `247 / 4 min / 99.98%` stats match.
- Onboarding stepper, FAQ (`Questions, answered.`), footer (`844-724-2424 / hello@cgcg.biz / Hudson Yards / Brooklyn`) all match.

### Still open (homepage)
- **Header** — see §4 (global).
- **Section reconciliation** — the code has `partners-marquee`, `press` ("In the press"), `case-studies` ("How We Solve"), and `industries` ("Industries We Serve") sections that are **not** in the `Desktop - 2` frame. The frame also has a large **blank gap** after the radar (an unfinished section). → Needs a designer decision: are these code sections being kept (frame just incomplete), or removed/replaced by whatever fills the gap?

---

## 3. Broken links — IMPLEMENTED INCORRECTLY (all pages / homepage)

The Unified-System cards and the nav "Services" link point at routes that **don't exist** (404):

| Link text | href in code | Target page | Fix |
|-----------|--------------|-------------|-----|
| Cybersecurity (card) | `cybersecurity/` | ❌ missing | → `cybersecurity-solutions/` |
| Operations (card) | `operations/` | ❌ missing | → create page or point to a real one |
| Data (card) | `data/` | ❌ missing | → create page or point to a real one |
| Infrastructure (card) | `infrastructure-connectivity/` | ✅ exists | ok |
| Services (nav) | `services/` | ❌ missing | → landing page or remove |

(These map to the design's 4 nav categories — the design implies real category landing pages exist; the code links assume pages that were never built.)

---

## 4. Header / navigation — GLOBAL GAP (not yet built)

Every design frame (`Header.png`, homepage, NaaS, cabling, Managed IT) shows the **same
light header**. The code ships two *different* dark navs and neither matches:

| Aspect | Design (all frames) | Code — homepage | Code — subpages |
|--------|--------------------|-----------------|-----------------|
| Theme | **White** bar, dark text | Dark floating **pill** | Dark full-width bar `#0a1020` |
| Logo | Dark/navy logo | White logo | White logo |
| Top-level items | **ABOUT US · INFRASTRUCTURE ▾ · CYBERSECURITY ▾ · OPERATIONS ▾ · DATA ▾ · INDUSTRIES ▾** (6) | `Services ▾ · About` | `Services ▾ · About` |
| CTA button | **Contact sales** (dark) | Get a Free Assessment (green) | Get a Free Assessment (green) |

This is one shared component duplicated inline across 19 files, so it's the highest-leverage
next task: rebuild once (light theme, 6-category dropdowns, dark logo, "Contact sales") and
propagate. Note `INDUSTRIES` is a *nav* category in the design but only exists as a homepage
*section* in code; `DATA`/`OPERATIONS`/`CYBERSECURITY` need real category pages (ties to §3).

---

## 5. Subpages — spot-check (NaaS `1440w light.png` → `NaaS/index.html`)

Faithfully implemented. Hero uses `.hero-headline`, eyebrow uses `--mono`, hero stats
`<$1,500 / 24/7 / $0` match the frame; section eyebrows (`The Concept`, `Side by Side`,
`The Process`, `The Shift` …) match. Same pattern expected across the other 16 subpages, but
each still needs its own line-by-line pass. Frame → page map:

- `Desktop - 2.png` → `index.html` (homepage)
- `1703w default.png` → `managed-it-services/`
- `1440w light.png` → `NaaS/`
- `1440w light-1.png` → `low-voltage-cabling/`
- `1440w light-2 … light-15` → remaining service subpages (need 1:1 confirmation)
- `Header.png` → shared nav
- `Screenshot 2026-06-11…` → external reference ("Ease"), not a CGCG page

---

## Recommended next steps (priority order)
1. **Rebuild the shared header** to the light design (§4) and propagate to all 19 pages.
2. **Fix the broken category links / create the missing category pages** (§3).
3. **Reconcile homepage sections** with the designer (§2 — the blank gap).
4. **Per-page subpage QA pass** against `light-2 … light-15`.
