// Uso: node _templates/new-case.mjs <slug> "<Título>"
// Crea las dos páginas del caso (ES y EN) y la carpeta de imágenes a partir de las plantillas.
import { readFileSync, writeFileSync, mkdirSync, existsSync } from "node:fs";
import { dirname, join } from "node:path";
import { fileURLToPath } from "node:url";

const [slug, title = "{{TITLE}}"] = process.argv.slice(2);
if (!slug || !/^[a-z0-9]+(-[a-z0-9]+)*$/.test(slug)) {
  console.error('Uso: node _templates/new-case.mjs <slug-en-minusculas-con-guiones> "<Título>"');
  process.exit(1);
}

const root = join(dirname(fileURLToPath(import.meta.url)), "..");
const targets = [
  ["case-study.es.html", join("proyectos", slug, "index.html")],
  ["case-study.en.html", join("en", "projects", slug, "index.html")],
];

for (const [tpl, out] of targets) {
  const dest = join(root, out);
  if (existsSync(dest)) {
    console.error(`Ya existe ${out}; no se sobrescribe.`);
    continue;
  }
  const html = readFileSync(join(root, "_templates", tpl), "utf8")
    .replaceAll("{{SLUG}}", slug)
    .replaceAll("{{TITLE}}", title);
  mkdirSync(dirname(dest), { recursive: true });
  writeFileSync(dest, html);
  console.log("Creado", out);
}

const imgs = join(root, "assets", "projects", slug);
mkdirSync(imgs, { recursive: true });
console.log("Carpeta de imágenes:", join("assets", "projects", slug));
