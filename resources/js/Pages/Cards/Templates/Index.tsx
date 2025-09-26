import React from 'react';
import { Head, Link, router } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/Components/ui/card';
import { Button } from '@/Components/ui/button';

interface Template {
    id: number;
    name: string;
    description: string;
    category: string;
    price: number;
    preview_image: string | null;
    template_data: any;
    customizable_fields: Record<string, any>;
}

interface User {
    id: number;
    name: string;
    email: string;
}

interface Props {
    templates: Template[];
    categories: string[];
    selectedCategory: string;
    auth?: {
        user: User | null;
    };
}

// Public Layout Component
function PublicLayout({ children, title }: { children: React.ReactNode; title?: string }) {
    return (
        <div className="min-h-screen bg-gray-50">
            <Head title={title || 'Card Templates'} />
            
            {/* Navigation */}
            <nav className="bg-white shadow">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="flex justify-between h-16">
                        <div className="flex items-center">
                            <Link href="/" className="text-xl font-bold text-gray-800">
                                Wedding Cards
                            </Link>
                        </div>
                        <div className="flex items-center space-x-4">
                            <Link href="/templates" className="text-gray-600 hover:text-gray-900">
                                Templates
                            </Link>
                            <Link href="/login" className="text-gray-600 hover:text-gray-900">
                                Login
                            </Link>
                            <Link href="/register" className="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm">
                                Register
                            </Link>
                        </div>
                    </div>
                </div>
            </nav>
            
            {children}
        </div>
    );
}

export default function TemplatesIndex({ templates, categories, selectedCategory, auth }: Props) {
    const handleCategoryChange = (category: string) => {
        router.get('/templates', { category }, { preserveState: true });
    };

    const handleCreateCard = (templateId: number) => {
        if (auth?.user) {
            router.get('/cards/create', { template: templateId });
        } else {
            router.get('/login');
        }
    };

    // Check if user is authenticated
    const isAuthenticated = auth?.user !== null;

    const content = (
        <>
            <Head title="Card Templates" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {/* Category Filter */}
                    {categories && categories.length > 0 && (
                        <div className="mb-8 flex flex-wrap gap-2">
                            {categories.map((category) => (
                                <Button
                                    key={category}
                                    variant={selectedCategory === category ? "default" : "outline"}
                                    onClick={() => handleCategoryChange(category)}
                                    className="capitalize"
                                >
                                    {category}
                                </Button>
                            ))}
                        </div>
                    )}

                    {/* Templates Grid */}
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        {templates && templates.length > 0 && templates.map((template) => (
                            <Card key={template.id} className="group hover:shadow-lg transition-shadow">
                                <CardHeader>
                                    {/* Template Preview */}
                                    <div className="aspect-[3/4] bg-gradient-to-br from-gray-100 to-gray-200 rounded-lg mb-4 flex items-center justify-center">
                                        {template.preview_image ? (
                                            <img 
                                                src={template.preview_image} 
                                                alt={template.name}
                                                className="w-full h-full object-cover rounded-lg"
                                            />
                                        ) : (
                                            <div className="text-center p-4">
                                                <div className="text-2xl mb-2">💒</div>
                                                <div className="text-sm text-gray-500 font-medium">
                                                    {template.name}
                                                </div>
                                                <div className="text-xs text-gray-400 mt-1">
                                                    Preview Coming Soon
                                                </div>
                                            </div>
                                        )}
                                    </div>
                                    
                                    <CardTitle className="text-lg">{template.name}</CardTitle>
                                    <CardDescription className="text-sm">
                                        {template.description}
                                    </CardDescription>
                                </CardHeader>
                                
                                <CardContent>
                                    <div className="flex items-center justify-between mb-4">
                                        <span className="text-2xl font-bold text-primary">
                                            ${template.price}
                                        </span>
                                        <span className="text-xs bg-gray-100 px-2 py-1 rounded-full capitalize">
                                            {template.category}
                                        </span>
                                    </div>
                                    
                                    {/* Customizable Fields Preview */}
                                    <div className="mb-4">
                                        <div className="text-xs text-gray-500 mb-2">Customizable Fields:</div>
                                        <div className="flex flex-wrap gap-1">
                                            {template.customizable_fields && Object.entries(template.customizable_fields).slice(0, 4).map(([key, field]: [string, any]) => (
                                                <span 
                                                    key={key}
                                                    className="text-xs bg-blue-50 text-blue-700 px-2 py-1 rounded"
                                                >
                                                    {field?.label || key}
                                                </span>
                                            ))}
                                            {template.customizable_fields && Object.keys(template.customizable_fields).length > 4 && (
                                                <span className="text-xs text-gray-400">
                                                    +{Object.keys(template.customizable_fields).length - 4} more
                                                </span>
                                            )}
                                        </div>
                                    </div>
                                    
                                    <div className="flex gap-2">
                                        <Button 
                                            className="flex-1"
                                            onClick={() => handleCreateCard(template.id)}
                                        >
                                            {auth?.user ? 'Use Template' : 'Login to Use'}
                                        </Button>
                                        <Button variant="outline" size="sm" asChild>
                                            <Link href={`/templates/${template.id}`}>
                                                Preview
                                            </Link>
                                        </Button>
                                    </div>
                                </CardContent>
                            </Card>
                        ))}
                    </div>

                    {/* Empty State */}
                    {(!templates || templates.length === 0) && (
                        <div className="text-center py-12">
                            <div className="text-gray-400 text-6xl mb-4">💒</div>
                            <h3 className="text-lg font-semibold text-gray-600 mb-2">
                                No templates found
                            </h3>
                            <p className="text-gray-500 mb-6">
                                No templates available for the "{selectedCategory}" category.
                            </p>
                            <Button variant="outline" onClick={() => handleCategoryChange('wedding')}>
                                View Wedding Templates
                            </Button>
                        </div>
                    )}

                    {/* Call to Action */}
                    <div className="mt-12 text-center">
                        <div className="bg-gradient-to-r from-blue-50 to-purple-50 rounded-lg p-8">
                            <h3 className="text-2xl font-bold text-gray-800 mb-4">
                                Ready to Create Your Perfect Wedding Card?
                            </h3>
                            <p className="text-gray-600 mb-6 max-w-2xl mx-auto">
                                Choose from our beautiful collection of professionally designed templates. 
                                Customize every detail to match your special day perfectly.
                            </p>
                            <div className="flex flex-col sm:flex-row gap-4 justify-center">
                                {auth?.user ? (
                                    <Button size="lg" asChild>
                                        <Link href="/cards">
                                            View My Cards
                                        </Link>
                                    </Button>
                                ) : (
                                    <Button size="lg" asChild>
                                        <Link href="/register">
                                            Get Started
                                        </Link>
                                    </Button>
                                )}
                                <Button variant="outline" size="lg" onClick={() => handleCategoryChange('wedding')}>
                                    Browse All Templates
                                </Button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );

    // Return appropriate layout based on authentication status
    if (isAuthenticated) {
        return (
            <AuthenticatedLayout
                header={
                    <h2 className="text-xl font-semibold leading-tight text-gray-800">
                        Card Templates
                    </h2>
                }
            >
                {content}
            </AuthenticatedLayout>
        );
    }

    return <PublicLayout title="Card Templates">{content}</PublicLayout>;
}
