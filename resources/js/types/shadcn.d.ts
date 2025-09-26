// ShadCN UI Component Types
declare module "@/components/ui/button" {
  import { ButtonProps } from "react";
  export { Button, buttonVariants } from "@/components/ui/button";
}

declare module "@/components/ui/card" {
  export { Card, CardHeader, CardFooter, CardTitle, CardDescription, CardContent } from "@/components/ui/card";
}

declare module "@/components/ui/input" {
  export { Input, type InputProps } from "@/components/ui/input";
}

declare module "@/components/ui/label" {
  export { Label, type LabelProps } from "@/components/ui/label";
}

declare module "@/components/ui/form" {
  export {
    useFormField,
    Form,
    FormItem,
    FormLabel,
    FormControl,
    FormDescription,
    FormMessage,
    FormField,
  } from "@/components/ui/form";
}
